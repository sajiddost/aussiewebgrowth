<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/functions.php';

$slug = clean($_GET['slug'] ?? '');
$post = $slug !== '' ? find_blog($slug) : null;

if (!$post) {
    require __DIR__ . '/404.php';
    exit;
}

$pageTitle       = $post['title'];
$pageDescription = $post['excerpt'];
$active          = 'blog';
$ogType          = 'article';
$ogImage         = $post['image'];
$canonicalPath   = $slug;

// --- Related guides: same category first, then recent guides ---
$candidates = array_filter(read_blogs(), function ($b) use ($slug) {
    return ($b['slug'] ?? '') !== $slug;
});
usort($candidates, function ($a, $b) use ($post) {
    $ac = ($a['category'] ?? '') === ($post['category'] ?? '') ? 0 : 1;
    $bc = ($b['category'] ?? '') === ($post['category'] ?? '') ? 0 : 1;
    if ($ac !== $bc) {
        return $ac <=> $bc;
    }
    return strtotime($b['date']) <=> strtotime($a['date']);
});
$related = array_slice($candidates, 0, 3);

// --- Structured data: BlogPosting + Breadcrumb ---
$postSchema = [
    '@context'         => 'https://schema.org',
    '@type'            => 'BlogPosting',
    'headline'         => $post['title'],
    'description'      => $post['excerpt'],
    'image'            => absolute_url($post['image']),
    'datePublished'    => date('c', strtotime($post['date'])),
    'dateModified'     => date('c', strtotime($post['date'])),
    'mainEntityOfPage' => absolute_url($canonicalPath),
    'author'           => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => absolute_url('')],
    'publisher'        => [
        '@type' => 'Organization',
        'name'  => SITE_NAME,
        'url'   => absolute_url(''),
        'logo'  => ['@type' => 'ImageObject', 'url' => absolute_url('assets/img/logo.png')],
    ],
];

$breadcrumbSchema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => absolute_url('')],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog & Guides', 'item' => absolute_url('blog')],
        ['@type' => 'ListItem', 'position' => 3, 'name' => $post['title'], 'item' => absolute_url($canonicalPath)],
    ],
];

$extraSchema = '<script type="application/ld+json">' . json_encode($postSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>'
    . '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

// --- Render content into styled HTML: headings, before/after cards, example
// --- boxes, takeaway + CTA boxes, blockquote callouts, FAQ accordions ---
$hs_inline = function (string $text): string {
    $line = preg_replace_callback('/\[([^\]]+)\]\(([^)]+)\)/', fn($m) => '<a class="process-link" href="' . site_url($m[2]) . '">' . $m[1] . '</a>', e($text));
    return preg_replace('/\*\*(.+?)\*\*/', '<strong>$1</strong>', $line);
};

$isClosingCta = function (string $line): bool {
    $low = strtolower($line);
    foreach (["if you'd rather", "if you’d rather", 'if you would rather', 'if you want', "if you'd like", "if you’d like", 'if you would like'] as $pfx) {
        if (strpos($low, $pfx) === 0) { return true; }
    }
    return false;
};

$contentLines = array_values(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $post['content'])), fn($l) => $l !== ''));

$bodyHtml      = [];
$faqItems      = [];
$inFaq         = false;
$itemOpen      = false;
$leadDone      = false;
$takeawayOpen  = false;
$i             = 0;
$n             = count($contentLines);

while ($i < $n) {
    $line = $contentLines[$i];

    if ($inFaq) {
        if (preg_match('/^#{2,3}\s+/', $line)) {
            if ($itemOpen) { $bodyHtml[] = '</div></div>'; $itemOpen = false; }
            $bodyHtml[] = '</div>';
            $inFaq = false;
        } elseif (preg_match('/^\*\*(.+?)\*\*\s*$/', $line, $m)) {
            $faqItems[] = ['q' => $m[1], 'a' => []];
            if ($itemOpen) { $bodyHtml[] = '</div></div>'; }
            $bodyHtml[] = '<div class="accordion-item" data-open="' . (count($faqItems) === 1 ? 'true' : 'false') . '">';
            $bodyHtml[] = '<h3 class="accordion-header">' . e($m[1]) . '<span></span></h3>';
            $bodyHtml[] = '<div class="accordion-body">';
            $itemOpen = true;
            $i++;
            continue;
        } else {
            $faqItems[count($faqItems) - 1]['a'][] = $line;
            $bodyHtml[] = '<p>' . $hs_inline($line) . '</p>';
            $i++;
            continue;
        }
    }

    if (preg_match('/^##\s+FAQ\s*$/i', $line)) {
        $inFaq = true;
        $bodyHtml[] = '<h2 class="hs-h2 hs-faq-title"><i class="ri-questionnaire-line"></i> FAQ</h2>';
        $bodyHtml[] = '<div class="accordion-holder">';
        $i++;
        continue;
    }

    if (preg_match('/^##\s+(The\s+)?Takeaway\s*$/i', $line)) {
        $bodyHtml[] = '<div class="hs-takeaway"><span class="hs-tag hs-tag-takeaway"><i class="ri-focus-3-line"></i> Key Takeaway</span>';
        $takeawayOpen = true;
        $i++;
        continue;
    }
    if ($takeawayOpen) {
        if (preg_match('/^#{2,3}\s+/', $line)) {
            $bodyHtml[] = '</div>';
            $takeawayOpen = false;
        } elseif ($isClosingCta($line) || preg_match('/^Related reading:/i', $line)) {
            $bodyHtml[] = '</div>';
            $takeawayOpen = false;
        } else {
            $bodyHtml[] = '<p>' . $hs_inline($line) . '</p>';
            $i++;
            continue;
        }
    }

    if (preg_match('/^\*\*Before:\*\*(.*)$/i', $line, $m)) {
        $bodyHtml[] = '<div class="hs-compare hs-before"><span class="hs-tag hs-tag-before"><i class="ri-close-circle-line"></i> Before</span>';
        $rest = trim($m[1]);
        if ($rest !== '') {
            $bodyHtml[] = '<p>' . $hs_inline($rest) . '</p>';
            $i++;
        } else {
            $tags = [];
            $i++;
            while ($i < $n && preg_match('/^H[1-6]:\s+/', $contentLines[$i])) {
                $tags[] = preg_replace('/^H[1-6]:\s+/', '', $contentLines[$i]);
                $i++;
            }
            if ($tags) {
                $bodyHtml[] = '<div class="hs-tagline">';
                foreach ($tags as $t) { $bodyHtml[] = '<span>' . e($t) . '</span>'; }
                $bodyHtml[] = '</div>';
            }
        }
        $bodyHtml[] = '</div>';
        continue;
    }

    if (preg_match('/^\*\*After:\*\*(.*)$/i', $line, $m)) {
        $bodyHtml[] = '<div class="hs-compare hs-after"><span class="hs-tag hs-tag-after"><i class="ri-checkbox-circle-line"></i> After</span>';
        $rest = trim($m[1]);
        if ($rest !== '') {
            $bodyHtml[] = '<p>' . $hs_inline($rest) . '</p>';
            $i++;
        } else {
            $tags = [];
            $i++;
            while ($i < $n && preg_match('/^H[1-6]:\s+/', $contentLines[$i])) {
                $tags[] = preg_replace('/^H[1-6]:\s+/', '', $contentLines[$i]);
                $i++;
            }
            if ($tags) {
                $bodyHtml[] = '<div class="hs-tagline">';
                foreach ($tags as $t) { $bodyHtml[] = '<span>' . e($t) . '</span>'; }
                $bodyHtml[] = '</div>';
            }
        }
        $bodyHtml[] = '</div>';
        continue;
    }

    if (preg_match('/^\*\*Example:\s*(.+?)\*\*\s*$/i', $line, $m)) {
        $bodyHtml[] = '<div class="hs-example"><span class="hs-tag hs-tag-example"><i class="ri-quote-line"></i> Example</span><p>' . $hs_inline($m[1]) . '</p></div>';
        $i++;
        continue;
    }

    if (preg_match('/^Related reading:/i', $line)) {
        $bodyHtml[] = '<div class="hs-related"><span class="hs-tag hs-tag-related"><i class="ri-bookmark-line"></i> Related Reading</span><p>' . $hs_inline(preg_replace('/^Related reading:\s*/i', '', $line)) . '</p></div>';
        $i++;
        continue;
    }

    if ($isClosingCta($line)) {
        $bodyHtml[] = '<div class="hs-cta"><p>' . $hs_inline($line) . '</p></div>';
        $i++;
        continue;
    }

    if (preg_match('/^>\s?(.*)$/', $line, $m)) {
        $bodyHtml[] = '<blockquote class="hs-note">' . $hs_inline($m[1]) . '</blockquote>';
        $i++;
        continue;
    }

    if (preg_match('/^##\s+/', $line)) {
        $bodyHtml[] = '<h2 class="hs-h2">' . e(preg_replace('/^##\s+/', '', $line)) . '</h2>';
        $i++;
        continue;
    }
    if (preg_match('/^###\s+/', $line)) {
        $bodyHtml[] = '<h3 class="hs-h3">' . e(preg_replace('/^###\s+/', '', $line)) . '</h3>';
        $i++;
        continue;
    }

    $cls = $leadDone ? '' : ' hs-lead';
    if (!$leadDone) { $leadDone = true; }
    $bodyHtml[] = '<p class="' . trim('hs-body-p' . $cls) . '">' . $hs_inline($line) . '</p>';
    $i++;
}
if ($takeawayOpen) { $bodyHtml[] = '</div>'; }
if ($inFaq) {
    if ($itemOpen) { $bodyHtml[] = '</div></div>'; }
    $bodyHtml[] = '</div>';
}

if ($faqItems) {
    $faqSchema = ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => []];
    foreach ($faqItems as $item) {
        $aText = trim(implode(' ', $item['a']));
        $aText = preg_replace('/\*\*(.+?)\*\*/', '$1', $aText);
        $aText = preg_replace('/\[([^\]]+)\]\([^)]+\)/', '$1', $aText);
        $faqSchema['mainEntity'][] = [
            '@type'          => 'Question',
            'name'           => $item['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $aText],
        ];
    }
    $extraSchema .= '<script type="application/ld+json">' . json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
}

require __DIR__ . '/includes/header.php';
?>

<!-- ========== PAGE HERO ========== -->
<section class="page-hero section pb-0">
	<div class="container">
		<div class="col-lg-10 col-xs-12 mx-auto text-center fadeInUp" data-delay="0.1">
			<p class="pill"><i class="ri-price-tag-3-line"></i><?= e($post['category']) ?></p>
			<h1><?= e($post['title']) ?></h1>
			<div class="blog-single-meta justify-content-center">
				<span><i class="ri-calendar-line"></i><?= date('M j, Y', strtotime($post['date'])) ?></span>
				<span><i class="ri-book-open-line"></i>Blog &amp; Guides</span>
			</div>
		</div>
	</div>
</section>
<!-- ========== END PAGE HERO ========== -->

<!-- ========== BLOG SINGLE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="blog-single-wrap fadeInUp" data-delay="0.2">
			<div class="blog-single-cover">
				<img src="<?= site_url($post['image']) ?>" alt="<?= e($post['title']) ?>" />
			</div>
			<div class="blog-single-body mt-4">
				<?php foreach ($bodyHtml as $chunk): ?><?= $chunk ?><?php endforeach; ?>
			</div>

			<?php if ($related): ?>
			<div class="related-guides mt-5">
				<h3 class="sec-title" style="font-size:28px;margin-bottom:8px;">Related <span>Guides</span></h3>
				<p class="sec-lead" style="margin-bottom:24px;">More from the same part of the roadmap &mdash; same category first, newest first.</p>
				<div class="row">
					<?php foreach ($related as $i => $rel): ?>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
						<a class="blog-card fadeInUp" href="<?= site_url($rel['slug']) ?>" data-delay="<?= min(0.1 + $i * 0.15, 0.4) ?>">
							<div class="blog-card-media">
								<img src="<?= site_url($rel['image']) ?>" alt="<?= e($rel['title']) ?>" loading="lazy" />
								<span class="blog-card-tag"><i class="ri-price-tag-3-line"></i><?= e($rel['category']) ?></span>
							</div>
							<div class="blog-card-body">
								<div class="blog-card-meta">
									<span><i class="ri-calendar-line"></i><?= date('M j, Y', strtotime($rel['date'])) ?></span>
								</div>
								<h3><?= e($rel['title']) ?></h3>
								<p><?= e($rel['excerpt']) ?></p>
								<span class="blog-card-footer">Read the guide <i class="ri-arrow-right-line"></i></span>
							</div>
						</a>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			<?php endif; ?>

			<div class="text-center" style="margin-top:40px;">
				<a href="<?= site_url('blog') ?>" class="btn btn-dark">&larr; Back to Blog</a>
			</div>
		</div>
	</div>
</section>
<!-- ========== END BLOG SINGLE ========== -->

<?php require __DIR__ . '/includes/footer.php'; ?>