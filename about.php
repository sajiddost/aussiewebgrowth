<?php
// =========================================================
// About Us — HelloSuggest founder story (unique layout)
// =========================================================
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/functions.php';

$pageTitle       = 'About Us | HelloSuggest';
$pageDescription = 'Meet Muhammad Nabil Aslam, the SEO specialist behind HelloSuggest. From cricketer to organic growth partner for 15+ businesses, on Google and in AI search.';
$active          = 'about';
$canonicalPath   = 'about';
$ogImage         = 'assets/img/blog/author.jpg';

$aboutSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'AboutPage',
    'name'        => 'About ' . SITE_NAME,
    'url'         => absolute_url('about'),
    'description' => $pageDescription,
    'mainEntity'  => [
        '@type'   => 'Person',
        'name'    => 'Muhammad Nabil Aslam',
        'jobTitle' => 'Founder, SEO Specialist',
        'worksFor' => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => absolute_url('')],
        'sameAs'  => [
            'https://www.linkedin.com/in/muhammad-nabil-aslam/',
            'https://x.com/MuhammadNa78976',
            'https://www.facebook.com/m.nabil.aslam.1',
            'https://www.instagram.com/m_nabilaslam/',
        ],
    ],
];

$breadcrumbSchema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => absolute_url('')],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'About', 'item' => absolute_url('about')],
    ],
];

$extraSchema = '<script type="application/ld+json">' . json_encode($aboutSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>'
    . '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

$founder = [
    'name'    => 'Muhammad Nabil Aslam',
    'origin'  => 'Kasur, Pakistan',
    'snapshot' => 'Founder &amp; SEO specialist, 3+ years across markets in the USA, UAE, Australia, and Europe.',
    'stats' => [
        ['num' => '3+', 'label' => 'Years of SEO experience'],
        ['num' => '15+', 'label' => 'Businesses helped grow'],
        ['num' => '4', 'label' => 'Markets served worldwide'],
    ],
    'social' => [
        ['icon' => 'ri-linkedin-fill', 'url' => 'https://www.linkedin.com/in/muhammad-nabil-aslam/', 'label' => 'LinkedIn'],
        ['icon' => 'ri-twitter-x-fill', 'url' => 'https://x.com/MuhammadNa78976', 'label' => 'X (Twitter)'],
        ['icon' => 'ri-facebook-fill', 'url' => 'https://www.facebook.com/m.nabil.aslam.1', 'label' => 'Facebook'],
        ['icon' => 'ri-instagram-fill', 'url' => 'https://www.instagram.com/m_nabilaslam/', 'label' => 'Instagram'],
    ],
];

$chapters = [
    [
        'num'  => '01',
        'title' => 'How It Started',
        'paras' => [
            'In 2023, I began learning SEO. It started as curiosity and slowly became a career. I learned the basics, worked on real websites, made mistakes, and gradually began working with businesses in international markets.',
        ],
    ],
    [
        'num'  => '02',
        'title' => 'What I Do Now',
        'paras' => [
            'Today, after 3+ years of experience across different niches, I help business owners, founders, and brands improve their visibility, rankings, traffic, and organic growth. I don&rsquo;t see SEO as just a job. It&rsquo;s the game I chose to master.',
        ],
    ],
    [
        'num'  => '03',
        'title' => 'The Hard Part Was Learning How to Think',
        'paras' => [
            'I didn&rsquo;t have everything figured out when I started. I had to learn how search engines and websites work, how businesses actually make money, and how content connects with search intent.',
            'Google kept changing. Now AI is changing search again. I realized that a handful of SEO tricks would never be enough. To get truly good, I had to learn how to think, not just what to do.',
        ],
    ],
    [
        'num'  => '04',
        'title' => 'The Question That Changed Everything',
        'paras' => [
            'The turning point came when I stopped treating SEO as a checklist and started looking at the business behind the website.',
            'I stopped asking, &ldquo;How do I rank this keyword?&rdquo; I started asking, &ldquo;Why should this business be found?&rdquo;',
            'That shift connected everything: technical SEO, content, search intent, semantic relationships, authority, entities, and user behavior. It&rsquo;s also why ' . SITE_NAME . ' exists. A long list of fixes doesn&rsquo;t grow a business. Knowing which five things matter most does.',
        ],
    ],
    [
        'num'  => '05',
        'title' => 'Every Business Taught Me Something Different',
        'paras' => [
            'Over the years, I&rsquo;ve worked with 15+ businesses in different industries, serving markets across the USA, UAE, Australia, and Europe. Some needed technical fixes. Some needed content that matched what people were actually searching for. Some taught me that traffic means very little if it doesn&rsquo;t contribute to the business.',
            'Working across niches showed me that no single playbook fits everyone. A manufacturer, a medical-device brand, and a local service business don&rsquo;t search, compete, or earn trust the same way. That&rsquo;s what pushed me to look beyond one website, one keyword, or one country.',
        ],
    ],
];

$process = [
    ['icon' => 'ri-search-eye-line', 'title' => 'Understand the business', 'text' => 'How the business makes money and what actually drives growth.'],
    ['icon' => 'ri-group-line', 'title' => 'Understand the audience', 'text' => 'Who the customer is, what they need, and what they search.'],
    ['icon' => 'ri-compass-3-line', 'title' => 'Understand the search landscape', 'text' => 'How the niche competes, ranks, and earns trust in search and AI.'],
    ['icon' => 'ri-home-gear-line', 'title' => 'Fix the foundation', 'text' => 'Technical health, crawlability, and indexation sorted by impact.'],
    ['icon' => 'ri-file-list-3-line', 'title' => 'Build relevance', 'text' => 'Content and entities arranged around real search intent.'],
    ['icon' => 'ri-link', 'title' => 'Build authority', 'text' => 'Trust and relevance earned through quality, not volume.']
];

$beliefs = [
    ['icon' => 'ri-line-chart-line', 'title' => 'Growth over rankings', 'text' => 'Ranking a keyword is not the same as growing a business. Position is a means, not an end.'],
    ['icon' => 'ri-user-heart-line', 'title' => 'People over algorithms', 'text' => 'SEO isn&rsquo;t about chasing algorithms. It&rsquo;s about understanding people, businesses, and how information connects.'],
    ['icon' => 'ri-flag-line', 'title' => 'Consistency over quick wins', 'text' => 'Persistent, steady work compounds. Quick wins fade; foundations do not.'],
];

require __DIR__ . '/includes/header.php';
?>
<!-- ========== PAGE HERO ========== -->
<section class="page-hero section">
	<div class="container">
		<nav class="hs-breadcrumb fadeInUp" data-delay="0.05" aria-label="Breadcrumb">
			<a href="<?= site_url('') ?>">Home</a><i class="ri-arrow-right-s-line"></i>
			<span>About</span>
		</nav>
		<div class="col-lg-10 col-xs-12 mx-auto text-center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-user-smile-line"></i>About HelloSuggest</h3>
			<h1>From a Cricket Bat to <span style="color:var(--primary-color);">Organic Growth</span></h1>
			<p class="sec-lead mx-auto" style="max-width:780px;">Most SEO stories start with a marketing degree. Mine started with a cricket bat. This is the story behind HelloSuggest &mdash; and the founder who built it.</p>
		</div>
	</div>
</section>
<!-- ========== END PAGE HERO ========== -->

<!-- ========== FOUNDER CARD ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="about-founder-card fadeInUp" data-delay="0.1">
			<div class="row no-gutters">
				<div class="col-lg-5">
					<div class="founder-photo">
						<img src="<?= site_url('assets/img/team/founder.jpeg') ?>" alt="Muhammad Nabil Aslam, founder of HelloSuggest" loading="lazy">
						<div class="founder-badge"><i class="ri-user-star-line"></i>Founder &amp; SEO Specialist</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="founder-info">
						<h3 class="pill"><i class="ri-user-smile-line"></i>The Founder</h3>
						<h2><?= e($founder['name']) ?></h2>
						<p class="founder-origin"><i class="ri-map-pin-2-line"></i><?= e($founder['origin']) ?>, Pakistan</p>
						<p class="founder-snapshot"><?= $founder['snapshot'] ?></p>
						<div class="founder-stats">
							<?php foreach ($founder['stats'] as $s): ?>
							<div class="founder-stat">
								<span><?= $s['num'] ?></span>
								<small><?= $s['label'] ?></small>
							</div>
							<?php endforeach; ?>
						</div>
						<div class="founder-social">
							<span>Let&rsquo;s connect:</span>
							<?php foreach ($founder['social'] as $s): ?>
							<a href="<?= e($s['url']) ?>" target="_blank" rel="noopener" aria-label="<?= e($s['label']) ?>"><i class="<?= e($s['icon']) ?>"></i></a>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== STORY CHAPTERS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-book-open-line"></i>The Story</h3>
			<h2 class="sec-title">Five Chapters, One <span>Pivot</span></h2>
			<p class="sec-lead">How a cricket obsession became a career in organic growth &mdash; one lesson at a time.</p>
		</div>
		<div class="about-story">
			<?php foreach ($chapters as $i => $c): ?>
			<article class="story-chapter fadeInUp" data-delay="<?= min(0.1 + $i * 0.1, 0.4) ?>">
				<span class="story-num"><?= e($c['num']) ?></span>
				<div class="story-body">
					<h3><?= e($c['title']) ?></h3>
					<?php foreach ($c['paras'] as $p): ?>
						<p><?= $p ?></p>
					<?php endforeach; ?>
				</div>
			</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ========== HOW I WORK ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-route-line"></i>How I Work</h3>
			<h2 class="sec-title">A Process Built From <span>Real Work</span></h2>
			<p class="sec-lead">Everything on this site runs through the same sequence &mdash; understand first, fix second, measure always.</p>
		</div>
		<div class="row">
			<?php foreach ($process as $pt): ?>
			<div class="col-lg-4 col-md-6 col-sm-12 px-lg-3 mb-4 d-flex">
				<div class="about-process-step h-100 fadeInUp" data-delay="<?= min(0.1 + (array_search($pt, $process) * 0.08), 0.42) ?>">
					<div class="process-ic"><i class="<?= e($pt['icon']) ?>"></i></div>
					<h4><?= e($pt['title']) ?></h4>
					<p><?= e($pt['text']) ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ========== WHAT I BELIEVE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-quote-line"></i>What I Believe</h3>
			<h2 class="sec-title">Principles That <span>Hold Up</span></h2>
		</div>
		<div class="row">
			<?php foreach ($beliefs as $b): ?>
			<div class="col-lg-4 col-md-6 col-sm-12 px-lg-3 mb-4">
				<div class="belief-card h-100 fadeInUp" data-delay="<?= min(0.1 + (array_search($b, $beliefs) * 0.1), 0.3) ?>">
					<i class="<?= e($b['icon']) ?>"></i>
					<h4><?= e($b['title']) ?></h4>
					<p><?= e($b['text']) ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ========== WHERE THIS IS GOING ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="about-vision fadeInUp" data-delay="0.1">
			<div class="row no-gutters align-items-center">
				<div class="col-lg-7">
					<div class="vision-inner">
						<h3 class="pill" style="color:#fff;border-color:rgba(255,255,255,.25);"><i class="ri-rocket-2-line"></i>Where This Is Going</h3>
						<h2>Win on Google Today. <span style="color:var(--primary-color);">Win in AI Search Tomorrow.</span></h2>
						<p>My goal is to be a trusted organic growth partner for businesses worldwide, helping them win on Google today and in AI search tomorrow. Down the road, I want to build my own SEO products and SaaS that help the next generation of businesses grow organically.</p>
						<p>I started by learning how to rank websites. Now I&rsquo;m learning how to build something that matters. And I&rsquo;m still learning, because the game keeps changing.</p>
						<a href="<?= site_url('audit') ?>" class="btn btn-white mt-2">Free SEO Assessment <i class="ri-arrow-right-line"></i></a>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="vision-media">
						<img src="<?= site_url('assets/img/award.png') ?>" alt="HelloSuggest award — built on honest, prioritized SEO work" loading="lazy">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== CTA ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="cta-band fadeInUp" data-delay="0.1">
			<div class="row align-items-center">
				<div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
					<h2>Want to see where your site stands?</h2>
					<p>Start with a free SEO assessment. You&rsquo;ll get a prioritized list of the five fixes that actually move rankings and revenue &mdash; no sales pitch.</p>
				</div>
				<div class="col-lg-5 col-md-12 text-lg-right">
					<a href="<?= site_url('audit') ?>" class="btn btn-white mb-2">Free Automated Audit</a>
					<a href="<?= site_url('contact') ?>" class="btn btn-dark mb-2">Talk to Me</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php require __DIR__ . '/includes/footer.php';