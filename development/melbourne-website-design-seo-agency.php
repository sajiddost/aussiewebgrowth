<?php
// =========================================================
// Melbourne Website Design & SEO Agency — service page
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$service = [
    'slug'        => 'melbourne-website-design-seo-agency',
    'title'       => 'Melbourne Web Design & SEO Agency',
    'pill'        => 'Melbourne Agency',
    'metaTitle'   => 'Melbourne Web Design & SEO Marketing Agency | Grow Online',
    'metaDesc'    => 'A Melbourne based website design and SEO marketing agency building fast, high-converting websites and ranking them on Google. Get your free quote today.',
    'h1'          => 'Melbourne Based Website Design and SEO Marketing Agency for Businesses That Want to Grow',
    'lead'        => 'A great-looking website that nobody finds is a wasted investment. So is a website ranking on page one that fails to convert visitors into customers. We&rsquo;re a Melbourne based website design and SEO marketing agency that builds fast, professional websites and gets them in front of the people searching for what you sell &mdash; one team, one strategy, and one clear goal: more enquiries, more sales, and more growth.',
    'image'       => 'assets/img/blog/3.jpg',
    'imageAlt'    => 'Melbourne based website design and SEO marketing agency - fast, high-converting websites that rank on Google',
    'related'     => ['seo-management', 'on-page-seo', 'authority-link-building'],

    'faqs' => [
        ['q' => 'How much does a website and SEO package cost in Melbourne?', 'a' => 'Cost depends on the size of your site, the features you need, and the level of SEO support required. Request a free audit and quote, and we&rsquo;ll give you a clear recommendation and estimate based on your business &mdash; no hidden fees, no padding.'],
        ['q' => 'How long does it take to build a website?', 'a' => 'Most websites take several weeks from kickoff to launch, depending on how quickly content, images, and feedback are provided. We&rsquo;ll share a schedule at the start of the project so you always know where things stand.'],
        ['q' => 'How long does SEO take to work?', 'a' => 'SEO is a long-term strategy. Some improvements can appear within weeks, but meaningful ranking and traffic growth typically builds over several months. The timeline depends on your competition, your current website, and the work involved.'],
        ['q' => 'Can you guarantee first-page rankings?', 'a' => 'No reputable agency can guarantee specific rankings, because search engines control the results. What we can guarantee is a sound strategy, ethical practices, and transparent reporting on progress &mdash; the same approach we use for our own clients.'],
        ['q' => 'Do I need a new website to do SEO?', 'a' => 'Not always. If your current site is fast, mobile-friendly, and well structured, we can optimise it. If it has major design or technical issues, a rebuild can deliver better results. We&rsquo;ll give you honest advice after the audit rather than selling you a rebuild you don&rsquo;t need.'],
        ['q' => 'Do I own my website and content?', 'a' => 'Yes. We&rsquo;ll be upfront about ownership, hosting, and domain arrangements so you always know where your website stands.'],
        ['q' => 'Can I update the website myself?', 'a' => 'Absolutely. We build on user-friendly platforms and can show you how to update your content. We&rsquo;re also happy to manage updates for you through our <a class="process-link" href="' . site_url('ongoing-website-support') . '">ongoing website support</a>.'],
    ],

    'ctaTitle' => 'Let&rsquo;s Grow Your Business Online',
    'ctaLead'  => 'Your business deserves a website that looks great, ranks well, and brings in customers. As your Melbourne based website design and SEO marketing agency, we&rsquo;ll build the website, plan the strategy, and support you as your business grows online.',
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
				<span class="svc-kicker"><i class="ri-tools-line"></i>Design &amp; SEO together</span>
				<span class="svc-kicker"><i class="ri-map-pin-2-line"></i>Melbourne based</span>
				<span class="svc-kicker"><i class="ri-search-line"></i>SEO built in</span>
				<span class="svc-kicker"><i class="ri-line-chart-line"></i>Results focused</span>
			</div>
		</div>
	</div>
</section>

<!-- ========== MELBOURNE CITY IMAGE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="fadeInUp" data-delay="0.1">
			<img src="assets/img/melbourne-skyline.jpg" alt="Melbourne city skyline - the market our Melbourne based web design and SEO agency serves" class="img-fluid w-100" style="border-radius:20px;box-shadow:0 18px 40px rgba(10,22,44,.12);" loading="lazy">
		</div>
	</div>
</section>

<!-- ========== INTRO ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-intro fadeInUp" data-delay="0.1">
			<p>A great-looking website that nobody finds is a wasted investment. So is a website ranking on page one that fails to convert visitors into customers. Design and SEO only deliver real results when they&rsquo;re built together &mdash; and that&rsquo;s exactly what we do.</p>
			<p>We&rsquo;re a Melbourne based website design and SEO marketing agency that builds fast, professional websites and gets them in front of the people searching for what you sell. One team, one strategy, and one clear goal: more enquiries, more sales, and more growth for your business.</p>
			<p>Whether you&rsquo;re a small local business, a growing service company, or an established brand ready to step up your online presence, we&rsquo;ll build a website and an SEO plan that fit your goals and your budget.</p>
			<p><strong>Design and SEO only deliver real results when they&rsquo;re built together &mdash; that&rsquo;s the whole point of a Melbourne based web design and SEO agency.</strong></p>
		</div>
	</div>
</section>

<!-- ========== WHY ONE AGENCY ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Why Choose a Melbourne Based Website Design <span>and SEO Marketing Agency?</span></h2>
			<p class="svc-section-lead">Many businesses hire one company to build their website and another to handle SEO. The result is often a site that looks good but is built without search in mind, followed by an SEO team forced to fix structural problems after launch. Working with a single agency solves that.</p>
			<div class="svc-symptoms">
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-tools-line"></i></div>
					<h4>SEO from day one</h4>
					<p>Site structure, page speed, content, and keywords are planned before a single page is designed &mdash; not patched in afterwards.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-community-line"></i></div>
					<h4>One team, one strategy</h4>
					<p>Your designers, developers, and SEO specialists work together, so nothing gets lost between handovers.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-map-pin-2-line"></i></div>
					<h4>Local market knowledge</h4>
					<p>We understand how Melbourne customers search, from inner-city suburbs to the outer north, west, and south-east.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-chat-1-line"></i></div>
					<h4>Clear accountability</h4>
					<p>When rankings, traffic, or enquiries change, there&rsquo;s one team to talk to and one plan to adjust.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-wallet-3-line"></i></div>
					<h4>Better return on investment</h4>
					<p>A website built to rank and convert works harder for every dollar you spend.</p>
				</div>
				<div class="svc-symptom">
					<a class="symptom-ic" href="<?= site_url('contact') ?>"><i class="ri-search-line"></i></a>
					<h4>Want proof before you commit?</h4>
					<p>Get a free website and search visibility audit &mdash; we&rsquo;ll show you what&rsquo;s holding you back, no obligation. <a class="process-link" href="<?= site_url('contact') ?>">Book your free audit &rarr;</a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== MID CTA ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="cta-band fadeInUp" data-delay="0.1">
			<div class="row align-items-center">
				<div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
					<h2>Want a Website That Ranks and Converts?</h2>
					<p>Stop paying for a website that doesn&rsquo;t bring in customers. As a trusted Melbourne based website design and SEO marketing agency, we&rsquo;ll audit your current website and search visibility for free and show you exactly what&rsquo;s holding you back. No pressure, no jargon, just a clear plan and a fair quote.</p>
					<p style="margin-top:14px;color:rgba(255,255,255,.75);font-size:14px;">We take on a limited number of new clients each month &mdash; contact us today to secure your spot.</p>
				</div>
				<div class="col-lg-5 col-md-12 text-lg-right">
					<a href="<?= site_url('contact') ?>" class="btn btn-white mb-2">Get Your Free Website &amp; SEO Audit</a>
					<p class="mt-2" style="color:rgba(255,255,255,.75);font-size:14px;"><i class="ri-phone-line"></i> Prefer to talk? Email <a href="mailto:<?= e(CONTACT_EMAIL) ?>" style="color:#fff;"><?= e(CONTACT_EMAIL) ?></a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== WEBSITE DESIGN ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Website Design by a Melbourne Web Design <span>and SEO Agency</span></h2>
			<p class="svc-section-lead">Your website is often the first impression a customer has of your business. We design sites that look professional, load quickly, and guide visitors toward taking action.</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-palette-line"></i><h4>Custom design that reflects your brand</h4><p>We don&rsquo;t use one-size-fits-all templates. Every website is designed around your brand, your services, and your customers, with layouts, colours, and imagery that help you stand out in a crowded Melbourne market.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-smartphone-line"></i><h4>Mobile-first, fast-loading development</h4><p>Most searches now happen on phones, and Google evaluates the mobile version of your site first. We design for small screens from the start and build lean, optimised pages so your site loads quickly on any device.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-focus-3-line"></i><h4>Conversion-focused layouts</h4><p>Traffic only matters if it turns into enquiries. We place clear calls to action, simple forms, tap-to-call buttons, and trust signals like reviews and case studies exactly where visitors need them.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100">
						<i class="ri-shopping-bag-3-line"></i><h4>Ecommerce and booking websites</h4>
						<p>Selling products or taking appointments? We build online stores and booking systems that are easy for customers to use and easy for you to manage.</p>
						<a class="process-link" href="<?= site_url('shopify-seo') ?>">Shopify stores &rarr;</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100">
						<i class="ri-dashboard-2-line"></i><h4>Easy-to-manage websites</h4>
						<p>We build on user-friendly platforms so you can update text, images, and offers yourself. If you&rsquo;d rather not, our team can handle updates for you.</p>
						<a class="process-link" href="<?= site_url('ongoing-website-support') ?>">Let us handle the updates &rarr;</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-eye-line"></i><h4>Honest about what you need</h4><p>If your current site is worth improving, we&rsquo;ll tell you &mdash; and we&rsquo;ll tell you when a redesign (or a technical fix alone) is the smarter path. No upselling a rebuild you don&rsquo;t need.</p></div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== SEO MARKETING SERVICES ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">SEO Marketing Services From Your <span>Melbourne SEO Agency</span></h2>
			<p class="svc-section-lead">Getting found on Google takes more than a well-built website. Our SEO marketing services help you attract the right people, at the right time, in the areas that matter to your business.</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100">
						<i class="ri-map-pin-2-line"></i><h4>Local SEO for Melbourne businesses</h4>
						<p>If you serve customers in specific suburbs or across Melbourne, local SEO is the fastest path to visibility &mdash; Google Business Profile optimisation, suburb and service pages, consistent listings across the web, a review strategy, and local schema markup.</p>
						<a class="process-link" href="<?= site_url('small-business-seo') ?>">Local SEO for every business &rarr;</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100">
						<i class="ri-file-search-line"></i><h4>Technical SEO</h4>
						<p>Behind every high-ranking site is a solid technical foundation. We audit and fix issues like site speed, mobile usability, crawl errors, broken links, duplicate content, and security so search engines can access and understand your site.</p>
						<a class="process-link" href="<?= site_url('technical-seo-audits') ?>">Explore technical audits &rarr;</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100">
						<i class="ri-window-2-line"></i><h4>On-page SEO &amp; keyword strategy</h4>
						<p>We research the terms your customers use, then optimise your page titles, headings, meta descriptions, content, images, and internal links around them. Every page has a clear purpose and a clear target.</p>
						<a class="process-link" href="<?= site_url('on-page-seo') ?>">See the on-page process &rarr;</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100">
						<i class="ri-quill-pen-line"></i><h4>Content marketing</h4>
						<p>Helpful, well-written content builds authority and attracts customers who are researching before they buy. We plan and create service pages, blog posts, guides, and FAQs that answer real questions and support your rankings.</p>
						<a class="process-link" href="<?= site_url('seo-process-measurement-and-honesty') ?>">Read how we measure SEO &rarr;</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100">
						<i class="ri-link"></i><h4>Link building and authority</h4>
						<p>Reputable links from relevant websites tell search engines your business can be trusted. We focus on quality, ethical link building that supports long-term growth rather than shortcuts that put your site at risk.</p>
						<a class="process-link" href="<?= site_url('authority-link-building') ?>">Explore link building &rarr;</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100">
						<i class="ri-line-chart-line"></i><h4>Reporting you can understand</h4>
						<p>You&rsquo;ll receive clear reports on rankings, traffic, calls, and enquiries, with plain-language explanations of what&rsquo;s working and what we&rsquo;ll do next. No confusing dashboards, no vanity metrics.</p>
						<a class="process-link" href="<?= site_url('seo-management') ?>">Ongoing SEO management &rarr;</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== PROCESS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-compass-line"></i>Our process</h3>
			<h2 class="sec-title">How Our Melbourne Web Design <span>and SEO Agency Works</span></h2>
			<p class="sec-lead">We keep the process simple and transparent so you always know where things stand.</p>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.1">
					<div class="step-circle"><i class="ri-search-line"></i><span class="step-num">1</span></div>
					<h4>Discovery and audit</h4>
					<p>We learn about your business, your customers, your goals, and your competitors. If you already have a website, we audit it for design, performance, and SEO issues.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.2">
					<div class="step-circle"><i class="ri-compass-line"></i><span class="step-num">2</span></div>
					<h4>Strategy and keyword research</h4>
					<p>We identify the keywords, locations, and content opportunities that will bring you the right customers, and we build a plan around them.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.3">
					<div class="step-circle"><i class="ri-pencil-ruler-line"></i><span class="step-num">3</span></div>
					<h4>Design and build</h4>
					<p>We design and develop your website with SEO built in &mdash; site structure, page templates, speed optimisation, and conversion-focused layouts. You review the design before we build.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.4">
					<div class="step-circle"><i class="ri-rocket-2-line"></i><span class="step-num">4</span></div>
					<h4>Launch and set-up</h4>
					<p>We test your website across devices and browsers, then launch and connect analytics, Google Search Console, and your Google Business Profile so we can measure results from day one.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.5">
					<div class="step-circle"><i class="ri-line-chart-line"></i><span class="step-num">5</span></div>
					<h4>Ongoing SEO and growth</h4>
					<p>SEO is a long-term investment. After launch, we continue to improve rankings and conversions through content, technical improvements, link building, and regular reporting.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.6">
					<div class="step-circle"><i class="ri-settings-3-line"></i><span class="step-num">6</span></div>
					<h4>Report and refine</h4>
					<p>Every month you get a clear report on rankings, traffic, calls, and enquiries &mdash; in plain language, with the next actions spelled out and the plan adjusted to what the data shows.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== WHO WE WORK WITH ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Who We Work <span>With</span></h2>
			<p class="svc-section-lead">We work with businesses across a wide range of industries &mdash; here&rsquo;s a snapshot of who we help.</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-tools-line"></i><h4>Trades and home services</h4><p>Plumbers, electricians, builders, and landscapers who live and die by local search and reviews.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-briefcase-line"></i><h4>Professional services</h4><p>Accountants, lawyers, consultants, and financial advisers who need to win trust before the first meeting.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-heart-pulse-line"></i><h4>Health, wellness &amp; beauty</h4><p>Clinics, studios, and salons that fill appointment books and build patient and client loyalty.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100">
						<i class="ri-building-2-line"></i><h4>Real estate and property</h4>
						<p>Agents and agencies that turn website visitors into appraisals and listings.</p>
						<a class="process-link" href="<?= site_url('real-estate-website-design-australia') ?>">Real estate web design &rarr;</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-shopping-bag-3-line"></i><h4>Retail and ecommerce</h4><p>Online stores built to convert browsers into buyers &mdash; and optimised to be found.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-restaurant-line"></i><h4>Hospitality</h4><p>Cafés, restaurants, and venues that bring local customers through the door.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-graduation-cap-line"></i><h4>Education, fitness &amp; community</h4><p>Schools, trainers, and community organisations that build engaged memberships.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-rocket-2-line"></i><h4>Growing businesses</h4><p>Companies that need a scalable website and a long-term SEO plan as they expand.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<a class="feature-card h-100" href="<?= site_url('contact') ?>" style="display:flex;flex-direction:column;text-decoration:none;background:rgba(228,2,43,.05);border-color:rgba(228,2,43,.25);">
						<i class="ri-question-line"></i><h4>Not sure if we fit?</h4>
						<p>No matter your size or industry, we&rsquo;ll tailor a strategy that suits your market and your goals.</p>
						<span class="tier-link" style="color:var(--primary-color);font-weight:700;">Talk to us <i class="ri-arrow-right-s-line"></i></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== WHY CHOOSE US ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Why Melbourne Businesses Choose Our <span>Web Design and SEO Agency</span></h2>
			<p class="svc-section-lead">There&rsquo;s no shortage of agencies in Melbourne. Here&rsquo;s what sets us apart.</p>
			<div class="svc-symptoms">
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-tools-line"></i></div>
					<h4>We combine design and SEO</h4>
					<p>You don&rsquo;t have to coordinate between a designer and an SEO provider. Everything works together from the start.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-line-chart-line"></i></div>
					<h4>We focus on results</h4>
					<p>We measure success by enquiries, calls, and sales &mdash; not just rankings and traffic.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-map-pin-2-line"></i></div>
					<h4>We&rsquo;re Melbourne based</h4>
					<p>We understand the local market, the suburbs, and the way Melbourne customers search and buy.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-chat-1-line"></i></div>
					<h4>We communicate clearly</h4>
					<p>You&rsquo;ll get honest advice, plain-language reporting, and realistic timelines. We won&rsquo;t promise overnight results or use jargon to hide the details.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-refresh-line"></i></div>
					<h4>We build for the long term</h4>
					<p>Your website and SEO strategy should keep improving as your business grows &mdash; and we&rsquo;re here to help you do that. <a class="process-link" href="<?= site_url('ongoing-website-support') ?>">See ongoing support &rarr;</a></p>
				</div>
				<div class="svc-symptom">
					<a class="symptom-ic" href="<?= site_url('contact') ?>"><i class="ri-arrow-right-circle-line"></i></a>
					<h4>Ready to see the difference?</h4>
					<p>Book a free audit and find out what your current website is costing you. <a class="process-link" href="<?= site_url('contact') ?>">Request your free audit &rarr;</a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== PRICING ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Website Design and SEO <span>Pricing</span></h2>
			<p>Every business has different needs, so we provide tailored quotes rather than one-size-fits-all packages. Website design pricing depends on the number of pages, custom features, and integrations. SEO pricing depends on your industry, competition, locations, and goals.</p>
			<p>We&rsquo;ll explain what&rsquo;s included, what&rsquo;s recommended, and what you can leave for later, so you can invest where it counts. Most websites are completed within several weeks, and SEO results build over time as your rankings and traffic grow.</p>
			<p>Ready for a clear, itemized quote? <a class="process-link" href="<?= site_url('contact') ?>">Request your free audit and quote</a> and we&rsquo;ll outline the investment alongside what&rsquo;s included.</p>
		</div>
	</div>
</section>

<!-- ========== FAQ ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-question-answer-line"></i>FAQ</h3>
			<h2 class="sec-title">Melbourne Web Design and SEO <span>Agency FAQs</span></h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-12 mb-4">
				<div class="faq-wrap fadeInUp" data-delay="0.2">
					<i class="ri-question-answer-line"></i>
					<h2>Have a different question?</h2>
					<a href="<?= site_url('contact') ?>" class="btn btn-primary mb-2">Get a free audit &amp; quote</a>
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
					<a href="<?= site_url('contact') ?>" class="btn btn-white mb-2">Request Your Free Audit &amp; Quote</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php require __DIR__ . '/../includes/footer.php';