<?php
// =========================================================
// About Us — AussieWeb Growth (aligned with homepage)
// =========================================================
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/functions.php';

$pageTitle       = 'About Us | AussieWeb Growth';
$pageDescription = 'AussieWeb Growth builds fast, mobile-first, SEO-ready websites for Australian small businesses \u2014 a repeatable process, fixed quotes up front, and support after launch.';
$active          = 'about';
$canonicalPath   = 'about';
$ogImage         = 'assets/img/web-development-services-in-australia-hero.webp';

$aboutSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'AboutPage',
    'name'        => 'About ' . SITE_NAME,
    'url'         => absolute_url('about'),
    'description' => $pageDescription,
    'mainEntity'  => [
        '@type'        => 'Organization',
        'name'         => SITE_NAME,
        'url'          => absolute_url(''),
        'description'  => 'Australian web development company building fast, mobile-first, SEO-ready websites for small businesses.',
        'areaServed'   => 'AU',
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

$company = [
    'name'     => 'AussieWeb Growth',
    'snapshot' => 'AussieWeb Growth is a web development company building fast, mobile-first, SEO-ready websites for Australian businesses. We work with caf&eacute;s and restaurants, trades and contractors, clinics and health practices, professional services, and local retailers &mdash; and every build starts from the same question: what does this website actually need to achieve?',
    'stats' => [
        ['num' => '1&ndash;2 wks', 'label' => 'Typical launch time for a small business website'],
        ['num' => '24 hrs', 'label' => 'Response time on every project'],
        ['num' => '100%', 'label' => 'Mobile-first, hand-built &mdash; no page-builder templates'],
    ],
];

$chapters = [
    [
        'num'  => '01',
        'title' => 'Who We Are',
        'paras' => [
            'AussieWeb Growth builds websites for Australian small businesses. Every site is hand-built and mobile-first, with SEO foundations, schema, and optimised images built in from day one &mdash; not added later as a fix-up.',
        ],
    ],
    [
        'num'  => '02',
        'title' => 'The Problem We Solve',
        'paras' => [
            'Most small-business websites are slow, dated, or built from bloated page-builder templates. Your customers judge your business in seconds, usually on a phone. A website that looks good but loads slowly, buries the answer, or hides the next step costs you enquiries.',
            'That is the standard we build against: fast pages, clear messaging, and an obvious next step on any device.',
        ],
    ],
    [
        'num'  => '03',
        'title' => 'How We Work',
        'paras' => [
            'Discovery, Design, Build, Launch &mdash; run as a repeatable process with clear milestones. You see the design before development starts, and you get one fixed, itemised quote up front, so there are no surprises after the build begins.',
        ],
    ],
    [
        'num'  => '04',
        'title' => 'What Every Build Must Do',
        'paras' => [
            'Design around your customer: every page starts from the question the visitor actually arrived with, so people find their answer and know exactly what to do next.',
            'Speed built in: clean code, optimised images, and lightweight pages from the start. SEO foundations: proper headings, schema, and fast load times, so search engines and AI systems can understand your site from launch.',
        ],
    ],
    [
        'num'  => '05',
        'title' => 'Beyond Launch',
        'paras' => [
            'A launch is not the finish line. We stay available for updates, maintenance, and the next thing your site needs &mdash; and when you are ready to grow, SEO and content work is built on the same foundation.',
        ],
    ],
];

$process = [
    ['icon' => 'ri-search-eye-line', 'title' => 'Discovery', 'text' => 'We learn your business, your customers, and what the website actually needs to achieve before anyone opens a design tool.'],
    ['icon' => 'ri-pencil-ruler-line', 'title' => 'Design', 'text' => 'You see the layout and look of every page before we build. You review it, request changes, and only then does development start.'],
    ['icon' => 'ri-code-s-slash-line', 'title' => 'Build', 'text' => 'Clean, fast, mobile-first code with SEO foundations, schema, and optimised images \u2014 tested across real phones and browsers.'],
    ['icon' => 'ri-rocket-2-line', 'title' => 'Launch & Support', 'text' => 'We deploy, test, and hand over training \u2014 then stay available for updates, maintenance, and the next thing your site needs.'],
    ['icon' => 'ri-tools-line', 'title' => 'Ongoing Support', 'text' => 'Updates, backups, small fixes, and the odd urgent repair \u2014 support that keeps a live site fast, secure, and current.'],
    ['icon' => 'ri-line-chart-line', 'title' => 'SEO & Growth', 'text' => 'SEO foundations ship with every site. When you are ready to grow, we build rankings on top of that foundation \u2014 on Google and in AI search.'],
];

$beliefs = [
    ['icon' => 'ri-pencil-ruler-line', 'title' => 'Design Around Your Customer', 'text' => 'Every page starts from the question a visitor actually arrived with \u2014 structure and calls to action arranged so people find their answer and know what to do next.'],
    ['icon' => 'ri-speed-line', 'title' => 'Speed Built In, Not Bolted On', 'text' => 'Page speed affects whether visitors stay, whether Google ranks you, and how many enquiries you get. We build lightweight pages from the start, not as a fix-up later.'],
    ['icon' => 'ri-search-eye-line', 'title' => 'SEO Foundations from Day One', 'text' => 'Proper headings, schema markup, fast load times, and optimised metadata \u2014 so your site can be indexed and understood from launch.'],
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
			<h3 class="pill"><i class="ri-code-s-slash-line"></i>About AussieWeb Growth</h3>
			<h1>Websites That <span style="color:var(--primary-color);">Work</span> for Australian Businesses</h1>
			<p class="sec-lead mx-auto" style="max-width:780px;">Fast, mobile-first, SEO-ready websites built for Australian businesses &mdash; designed to load quickly, look professional, and turn visitors into customers.</p>
		</div>
	</div>
</section>
<!-- ========== END PAGE HERO ========== -->

<!-- ========== WHO WE ARE CARD ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="about-founder-card fadeInUp" data-delay="0.1">
			<div class="row no-gutters">
				<div class="col-lg-5">
					<div class="founder-photo">
						<img src="<?= site_url('assets/img/website-design-and-development-agency.webp') ?>" alt="AussieWeb Growth - web development services in Australia" loading="lazy">
						<div class="founder-badge"><i class="ri-code-s-slash-line"></i>Web Development &bull; Australia-wide</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="founder-info">
						<h3 class="pill"><i class="ri-store-2-line"></i>Who We Are</h3>
						<h2><?= e($company['name']) ?></h2>
						<p class="founder-origin"><i class="ri-map-pin-2-line"></i>Serving small businesses across Australia</p>
						<p class="founder-snapshot"><?= $company['snapshot'] ?></p>
						<div class="founder-stats">
							<?php foreach ($company['stats'] as $s): ?>
							<div class="founder-stat">
								<span><?= $s['num'] ?></span>
								<small><?= $s['label'] ?></small>
							</div>
							<?php endforeach; ?>
						</div>
						<div class="founder-social">
							<span>Ready to start?</span>
							<a href="<?= site_url('contact') ?>" aria-label="Contact us"><i class="ri-chat-1-line"></i></a>
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
			<h3 class="pill"><i class="ri-book-open-line"></i>The Company</h3>
			<h2 class="sec-title">What We Do, and <span>How We Work</span></h2>
			<p class="sec-lead">Who we are, what every website we build has to do, and what happens after it goes live.</p>
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

<!-- ========== HOW WE WORK ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-refresh-line"></i>How We Work</h3>
			<h2 class="sec-title">A Repeatable Build Process, <span>Not a Black Box</span></h2>
			<p class="sec-lead">Discovery, Design, Build, Launch &mdash; run as a process with clear milestones. Most website projects don&rsquo;t go wrong from a lack of talent. They go wrong from a lack of structure. We fix that.</p>
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

<!-- ========== A WEBSITE THAT LOOKS GOOD ISN'T ENOUGH ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-sparkling-2-line"></i>Design &bull; Speed &bull; Search</h3>
			<h2 class="sec-title">A Website That <span>Looks Good</span> Isn&rsquo;t Enough</h2>
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
						<h2>A Web Partner for <span style="color:var(--primary-color);">Australian Businesses</span></h2>
						<p>Our goal is simple: be the web development partner Australian small businesses trust &mdash; to launch fast, stay supported, and keep growing. That means websites that win on Google today and stay visible as AI search grows.</p>
						<p>Every project teaches us something new about a different industry, a different customer, and a different way to earn trust online. We keep applying it to the next build.</p>
						<a href="<?= site_url('contact') ?>" class="btn btn-white mt-2">Get a Free Website Quote <i class="ri-arrow-right-line"></i></a>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="vision-media">
						<img src="<?= site_url('assets/img/award.png') ?>" alt="AussieWeb Growth - award for honest, results-driven web work" loading="lazy">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php require __DIR__ . '/includes/footer.php';
