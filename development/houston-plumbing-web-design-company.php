<?php
// =========================================================
// Houston Plumbing Web Design Company — service page
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$service = [
    'slug'      => 'houston-plumbing-web-design-company',
    'title'     => 'Houston Plumbing Web Design Company',
    'pill'      => 'Plumbing Web Design',
    'metaTitle' => 'Houston Plumbing Web Design Company',
    'metaDesc'  => 'Houston Plumbing Web Design Company building fast, mobile-first sites for local plumbers. Service and location pages built around how customers actually search.',
    'h1'        => 'Houston Plumbing Web Design Company: Websites That Get Emergency Calls',
    'lead'      => 'Most plumbing websites in Houston look the same. A stock photo of a wrench, a blue and orange color scheme, a phone number in the header, and a contact form nobody fills out. The site loads slowly on mobile, the service area page lists every zip code in Harris County with no real content behind it, and the homepage tries to talk to homeowners, property managers, and other contractors all at once. We build websites specifically for plumbing companies operating in Houston and the surrounding areas &mdash; Sugar Land, Katy, Pearland, The Woodlands. The goal isn&rsquo;t a website that looks nice in a portfolio. It&rsquo;s a website that answers the question a homeowner has at 11pm when a pipe bursts, and does it fast enough that they call you instead of the next result on the page.',
    'image'     => 'assets/img/development/houston-plumbing-web-design.jpg',
    'imageAlt'  => 'Houston plumbing web design company - fast, mobile-first websites built for local plumbers',
    'related'   => ['small-business-seo', 'on-page-seo', 'technical-seo-audits'],

    'faqs' => [
        ['q' => 'Do you only work with plumbers in Houston?', 'a' => 'Houston is our focus, along with the surrounding suburbs like Katy, Sugar Land, Pearland, and The Woodlands. We don&rsquo;t currently take on plumbing web design clients outside this metro area, since our process depends on knowing the local competition and search behavior well.'],
        ['q' => 'Will the site work on mobile?', 'a' => 'Yes, and it&rsquo;s treated as the priority, not an afterthought, since most emergency plumbing searches happen on a phone.'],
        ['q' => 'Do you write the content or do I need to provide it?', 'a' => 'We write the service page content based on a conversation with you about how you actually do the work. You&rsquo;re welcome to provide your own if you&rsquo;d rather, and we&rsquo;ll edit it for clarity and structure.'],
        ['q' => 'How long does a typical build take?', 'a' => 'It depends on the number of service and location pages needed. A straightforward site with five or six service pages and a handful of location pages generally takes a few weeks from structure approval to launch.'],
        ['q' => 'Can you also help with SEO after the site is built?', 'a' => 'Yes. A well-built site is the foundation, but ongoing work like <a class="process-link" href="' . site_url('small-business-seo') . '">small business SEO</a>, content, and local listing management are separate services if you want to keep building on it once the site is live.'],
    ],

    'ctaTitle' => 'Want a Plumbing Website Built Around How Your Customers Actually Search?',
    'ctaLead'  => 'Talk to HelloSuggest about your current site and what&rsquo;s holding it back. We&rsquo;ll review your plumbing website for free and show you exactly where it&rsquo;s losing emergency calls &mdash; then map the structure, service pages, and location pages that fix it.',
];

// ---------------------------------------------------------
// Unique layout for this service (no shared layout).
// ---------------------------------------------------------
require __DIR__ . '/../Pages/_page-head.php';
?>
<!-- ========== PAGE HERO ========== -->
<section class="page-hero section">
	<div class="container">
		<nav class="hs-breadcrumb fadeInUp" data-delay="0.05" aria-label="Breadcrumb">
			<a href="<?= site_url('') ?>">Home</a><i class="ri-arrow-right-s-line"></i>
			<a href="<?= site_url('') ?>#services">Services</a><i class="ri-arrow-right-s-line"></i>
			<span><?= e($service['title']) ?></span>
		</nav>
		<div class="col-lg-9 col-xs-12 mx-auto text-center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="<?= e($SERVICES[$service['slug']]['icon']) ?>"></i><?= e($service['pill']) ?></h3>
			<h1><?= e($service['h1']) ?></h1>
			<p class="sec-lead mx-auto" style="max-width:780px;"><?= $service['lead'] ?></p>
			<div class="svc-kicker-row">
				<span class="svc-kicker"><i class="ri-phone-line"></i>Click-to-call first</span>
				<span class="svc-kicker"><i class="ri-speed-line"></i>Mobile and fast</span>
				<span class="svc-kicker"><i class="ri-file-list-3-line"></i>Service + location pages</span>
				<span class="svc-kicker"><i class="ri-map-pin-2-line"></i>Houston metro focus</span>
			</div>
		</div>
	</div>
</section>

<!-- ========== SERVICE FEATURE IMAGE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="fadeInUp" data-delay="0.1">
			<img src="<?= file_asset('assets/img/development/houston-plumbing-web-design.jpg') ?>" alt="<?= e($service['imageAlt']) ?>" class="img-fluid w-100" style="border-radius:20px;box-shadow:0 18px 40px rgba(10,22,44,.12);" loading="lazy">
		</div>
	</div>
</section>

<!-- ========== INTRO ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-intro fadeInUp" data-delay="0.1">
			<p>Most plumbing websites in Houston look the same. A stock photo of a wrench, a blue and orange color scheme, a phone number in the header, and a contact form nobody fills out. The site loads slowly on mobile, the service area page lists every zip code in Harris County with no real content behind it, and the homepage tries to talk to homeowners, property managers, and other contractors all at once.</p>
			<p>None of that is an accident. It&rsquo;s what happens when a website gets built once and never touched again, or when it gets built by a generic web design shop that treated the plumbing business the same way it treated the last client, a dentist or a roofer.</p>
			<p>We build websites specifically for plumbing companies operating in Houston and the surrounding areas, Sugar Land, Katy, Pearland, The Woodlands. The goal isn&rsquo;t a website that looks nice in a portfolio. It&rsquo;s a website that answers the question a homeowner has at 11pm when a pipe bursts, and does it fast enough that they call you instead of the next result on the page.</p>
			<p><strong>The goal isn&rsquo;t a website that looks nice in a portfolio.</strong></p>
		</div>
	</div>
</section>

<!-- ========== THE PROBLEM ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">The Problem We <span>Actually See</span></h2>
			<p class="svc-section-lead">When we audit a plumbing company&rsquo;s existing site, the same issues come up again and again.</p>
			<div class="svc-symptoms">
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-file-list-3-line"></i></div>
					<h4>Thin or missing service pages</h4>
					<p>The site isn&rsquo;t built around how people actually search &mdash; &ldquo;emergency plumber near me,&rdquo; &ldquo;water heater repair Houston,&rdquo; &ldquo;slab leak detection.&rdquo; Instead it&rsquo;s built around how the owner talks about the business internally. No dedicated page for drain cleaning, no page for tankless water heater installation, no page for sewer line repair &mdash; just one generic &ldquo;services&rdquo; page that tries to cover everything and ranks for nothing.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-speed-line"></i></div>
					<h4>Mobile speed is the second problem</h4>
					<p>A plumbing site loaded with oversized images and unnecessary scripts can take five or six seconds to load on a phone with average signal. Someone standing in a flooded bathroom isn&rsquo;t waiting six seconds. They&rsquo;re hitting the back button.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== WHAT WE BUILD ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0 fadeInUp" data-delay="0.1">
				<img src="<?= file_asset('assets/img/development/houston-plumbing-mobile-website.webp') ?>" alt="Houston plumbing website built around service and location pages with a thumb-friendly click-to-call button" class="img-fluid" style="border-radius:20px;box-shadow:0 18px 40px rgba(10,22,44,.12);" loading="lazy">
			</div>
			<div class="col-lg-6 col-md-12 svc-section fadeInUp" data-delay="0.2">
				<h2 class="svc-section-title">What We <span>Build</span></h2>
				<p class="svc-section-lead">A plumbing website from us is structured around service and location, because that&rsquo;s how people search and that&rsquo;s how Google understands relevance.</p>
				<div class="svc-checks">
					<div class="svc-check"><i class="check-ic good ri-folder-shield-line"></i><div><h4>Individual service and location pages</h4><p>Core services &mdash; drain cleaning, water heater repair and installation, leak detection, sewer line repair, gas line work &mdash; each with its own page, along with pages built around the specific areas you serve rather than a single generic list. This structure is the foundation of what we cover in more depth on our <a class="process-link" href="<?= site_url('on-page-seo') ?>">on-page SEO</a> and <a class="process-link" href="<?= site_url('semantic-entity-seo') ?>">semantic &amp; entity SEO</a> pages, applied specifically to a local trade business.</p></div></div>
					<div class="svc-check"><i class="check-ic good ri-speed-line"></i><div><h4>Speed and mobile first</h4><p>Most emergency plumbing searches happen on a phone. That means compressed images, minimal third-party scripts, and a click-to-call button that&rsquo;s actually usable with a thumb &mdash; not buried in a hamburger menu three taps deep. This sits alongside the broader crawlability and site health work we do under <a class="process-link" href="<?= site_url('technical-seo-audits') ?>">technical SEO</a>, scaled to what a plumbing company&rsquo;s site actually needs.</p></div></div>
					
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== HOW THE PROCESS WORKS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">How the Process <span>Works</span></h2>
			<div class="svc-checks">
				<div class="svc-check"><i class="check-ic good ri-chat-3-line"></i><div><h4>Discovery</h4><p>We start with a short conversation about which services actually drive revenue for you and which areas you want more work in. Emergency plumbing and drain cleaning usually pull different search volume than, say, fixture installation, and the site should reflect that priority rather than treating every service equally.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-folder-shield-line"></i><div><h4>Structure before design</h4><p>From there we map out the site structure &mdash; service pages, location pages, and any additional content that supports them &mdash; before any design work starts. Building the structure first avoids the common mistake of designing a pretty homepage and then bolting on thin service pages afterward.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-quill-pen-line"></i><div><h4>Design and copywriting in parallel</h4><p>We write the service page content ourselves, based on how plumbers actually describe their work, not generic marketing language pulled from a template. Once pages are built, we test load speed, mobile usability, and form functionality before anything goes live.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-refresh-line"></i><div><h4>Launch and beyond</h4><p>After launch, the site isn&rsquo;t left alone. Search rankings shift, Google updates how it displays local results, and new service pages sometimes need to be added as your business grows into new work. We can maintain the site on an ongoing basis if that&rsquo;s useful to you, or hand it off cleanly if you&rsquo;d rather manage it in-house.</p></div></div>
			</div>
		</div>
	</div>
</section>

<!-- ========== WHAT'S INCLUDED ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">What&rsquo;s <span>Included</span></h2>
			<p class="svc-section-lead">Everything a Houston plumbing company needs to start winning the calls that matter.</p>
			<div class="svc-checks">
				<div class="svc-check"><i class="check-ic good ri-folder-shield-line"></i><div><h4>Custom site structure</h4><p>Built around your actual services and service areas.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-file-list-3-line"></i><div><h4>Keyword-relevant service pages</h4><p>Individual pages for core services rather than one combined page.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-smartphone-line"></i><div><h4>Mobile-first design</h4><p>Fast load times and a functional click-to-call setup.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-building-4-line"></i><div><h4>Google Business Profile alignment</h4><p>Consistent business information across the site.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-quill-pen-line"></i><div><h4>Written service page content</h4><p>Not filler text.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-link"></i><div><h4>On-page SEO built into the structure</h4><p>Title tags, meta descriptions, header hierarchy, and internal linking between service and location pages &mdash; not bolted on afterward.</p></div></div>
				
			</div>
		</div>
	</div>
</section>

<!-- ========== WHO THIS IS FOR ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Who This <span>Is For</span></h2>
			<p>This is built for licensed plumbing companies in the Houston area that get real service calls and want a website that supports that, not a side project or a portfolio piece. It works whether you&rsquo;re a small crew doing residential repair work or a larger company handling commercial plumbing across multiple cities in the metro area.</p>
			<p>It&rsquo;s probably not the right fit if you&rsquo;re looking for the cheapest possible site with no ongoing thought behind it, since that&rsquo;s not really what we do.</p>
		</div>
	</div>
</section>

<!-- ========== FAQ ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-question-answer-line"></i>FAQ</h3>
			<h2 class="sec-title">Houston Plumbing Web Design <span>FAQs</span></h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-12 mb-4">
				<div class="faq-wrap fadeInUp" data-delay="0.2">
					<i class="ri-question-answer-line"></i>
					<h2>Have a different question?</h2>
					<a href="<?= site_url('contact') ?>" class="btn btn-primary mb-2">Contact HelloSuggest</a>
					<p>Prefer to email? <a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= e(CONTACT_EMAIL) ?></a></p>
				</div>
			</div>
			<div class="col-lg-8 col-md-12 mb-4">
				<div class="accordion-holder fadeInUp" data-delay="0.3">
					<?php foreach ($service['faqs'] as $i => $faq) { $open = $i === 0 ? 'true' : 'false'; ?>
						<div class="accordion-item" data-open="<?= $open ?>">
							<h3 class="accordion-header"><?= $faq['q'] ?><span></span></h3>
							<div class="accordion-body"><p><?= $faq['a'] ?></p></div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== RELATED (internal links into other services) ========== -->
<?php if (!empty($related)): ?>
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-arrow-right-up-line"></i>Related Services</h3>
			<h2 class="sec-title">Explore More <span>Ways We Help</span></h2>
			<p class="sec-lead">This service rarely works alone. These are the areas it connects with most.</p>
		</div>
		<div class="row">
			<?php foreach ($related as $i => $r): ?>
			<div class="col-lg-4 col-md-4 col-sm-12 mb-4">
				<a class="industry-card fadeInUp" href="<?= site_url($r['slug']) ?>" data-delay="<?= min(0.1 + $i * 0.12, 0.4) ?>">
					<div class="industry-icon"><i class="<?= e($r['icon']) ?>"></i></div>
					<h4><?= e($r['name']) ?></h4>
					<p><?= e($r['tagline']) ?></p>
					<span class="industry-link">Explore service <i class="ri-arrow-right-s-line"></i></span>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>

<!-- ========== CTA ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="cta-band fadeInUp" data-delay="0.1">
			<div class="row align-items-center">
				<div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
					<h2><?= e($service['ctaTitle']) ?></h2>
					<p><?= $service['ctaLead'] ?></p>
				</div>
				<div class="col-lg-5 col-md-12 text-lg-right">
					<a href="<?= site_url('contact') ?>" class="btn btn-white mb-2">Contact HelloSuggest</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php require __DIR__ . '/../includes/footer.php';