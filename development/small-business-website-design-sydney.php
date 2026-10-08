<?php
// =========================================================
// Small Business Website Design Sydney — service page
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$service = [
    'slug'        => 'small-business-website-design-sydney',
    'title'       => 'Small Business Website Design Sydney',
    'pill'        => 'Sydney Small Business',
    'metaTitle'   => 'Small Business Website Design Sydney | More Local Customers',
    'metaDesc'    => 'Small business website design in Sydney that looks sharp, loads fast and brings in customers. Affordable, SEO-ready websites. Get your free quote today.',
    'h1'          => 'Small Business Website Design Sydney: Websites That Turn Local Searches Into Loyal Customers',
    'lead'        => 'Picture this. Someone in Parramatta, Marrickville, or Manly needs a plumber, a caterer, or an accountant. They pull out their phone, type a quick search, and scan the first few results. In about ten seconds, they&rsquo;ve decided who looks trustworthy and who doesn&rsquo;t. We build fast, beautiful, mobile-friendly websites that make your business look as good online as it is in real life &mdash; and we make sure the right people can find you. No jargon. No bloated packages. No disappearing act after launch. Just a website that works as hard as you do.',
    'image'       => 'assets/img/service/small-business-website-design-sydney.jpg',
    'imageAlt'    => 'Small business website design Sydney - fast, mobile-friendly websites that turn local searches into loyal customers',
    'related'     => ['small-business-seo', 'on-page-seo', 'ongoing-website-support'],

    'faqs' => [
        ['q' => 'How much does small business website design cost in Sydney?', 'a' => 'It depends on the size of your site, the features you need, and whether you want content writing and SEO included. Request a free quote and we&rsquo;ll give you a clear estimate based on your business &mdash; no hidden extras, no surprise costs.'],
        ['q' => 'How long does it take to build a small business website?', 'a' => 'Most projects take a few weeks from kickoff to launch. Timelines depend on how quickly content, images, and approvals come through, and we&rsquo;ll share a schedule at the start so you always know where things stand.'],
        ['q' => 'Will my website show up on Google?', 'a' => 'We build every site with SEO best practices and local optimisation from day one. Rankings depend on competition and effort over time, and we can support ongoing SEO to help you climb &mdash; see our <a class="process-link" href="' . site_url('small-business-seo') . '">small business SEO</a> service.'],
        ['q' => 'Will my website work on mobile phones?', 'a' => 'Yes. Every website is designed mobile-first, because most local searches happen on smartphones.'],
        ['q' => 'Can I update the website myself?', 'a' => 'Absolutely. We build on user-friendly platforms and show you how to change text, images, and offers. If you&rsquo;d rather not, we&rsquo;re happy to handle updates for you through our <a class="process-link" href="' . site_url('ongoing-website-support') . '">ongoing website support</a>.'],
        ['q' => 'Do I own my website?', 'a' => 'Yes. We&rsquo;ll be upfront about ownership, hosting, and domain arrangements so you always know where your website stands.'],
        ['q' => 'I already have a website. Can you improve it?', 'a' => 'Of course. We&rsquo;ll review your existing site and give you honest advice. If a refresh can solve the problems, we&rsquo;ll say so. If a full rebuild makes more sense, we&rsquo;ll explain why.'],
    ],

    'ctaTitle' => 'Let&rsquo;s Build a Website That Helps Your Sydney Business Grow',
    'ctaLead'  => 'You&rsquo;ve worked hard to build your business. With small business website design Sydney built around your goals, you get more than a pretty page &mdash; you get a hard-working online presence that brings in enquiries while you focus on what you do best. Request your free quote today, and we&rsquo;ll show you exactly where your current website is losing customers &mdash; no pressure, no jargon.',
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
				<span class="svc-kicker"><i class="ri-smartphone-line"></i>Mobile-first</span>
				<span class="svc-kicker"><i class="ri-search-eye-line"></i>Local SEO built in</span>
				<span class="svc-kicker"><i class="ri-zap-line"></i>Fast by default</span>
				<span class="svc-kicker"><i class="ri-wallet-3-line"></i>Fair pricing</span>
			</div>
		</div>
	</div>
</section>

<!-- ========== SERVICE FEATURE IMAGE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="fadeInUp" data-delay="0.1">
			<img src="assets/img/service/small-business-website-design-sydney.jpg" alt="<?= e($service['imageAlt']) ?>" class="img-fluid w-100" style="border-radius:20px;box-shadow:0 18px 40px rgba(10,22,44,.12);" loading="lazy">
		</div>
	</div>
</section>

<!-- ========== INTRO ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-intro fadeInUp" data-delay="0.1">
			<p>Is that business you? Our small business website design Sydney service exists to make sure it is.</p>
			<p>We build fast, beautiful, mobile-friendly websites that make your business look as good online as it is in real life &mdash; and we make sure the right people can find you. No jargon. No bloated packages. No disappearing act after launch. Just a website that works as hard as you do.</p>
			<p>Whether you&rsquo;re a Western Sydney trade, a North Shore professional, or a Surrey Hills café that needs more bookings, we&rsquo;ll design a website that fits your business, your budget, and the way your customers actually search.</p>
			<p><strong>A website that works as hard as you do &mdash; turning local searches into loyal customers, day in and day out.</strong></p>
		</div>
	</div>
</section>

<!-- ========== WARNING SIGNS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Is Your Website Costing <span>You Customers?</span></h2>
			<p class="svc-section-lead">Most small business owners don&rsquo;t realise their website is turning people away. Here are a few warning signs:</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-history-line"></i><h4>It looks dated</h4><p>If your site hasn&rsquo;t changed since before the pandemic, customers may assume your business hasn&rsquo;t either.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-speed-line"></i><h4>It&rsquo;s slow</h4><p>Visitors on their phones won&rsquo;t wait around for pages that take forever to load.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-smartphone-line"></i><h4>It&rsquo;s hard to use on mobile</h4><p>Tiny text and squashed buttons send people straight back to Google.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-phone-line"></i><h4>Your phone number is hard to find</h4><p>If customers have to hunt for it, many won&rsquo;t bother.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-search-eye-line"></i><h4>You&rsquo;re invisible on Google</h4><p>If competitors show up when people search for your services and you don&rsquo;t, you&rsquo;re handing them business.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-git-merge-line"></i><h4>It doesn&rsquo;t say what makes you different</h4><p>Visitors should understand who you help and why you&rsquo;re the right choice within seconds.</p></div>
				</div>
			</div>
			<p class="svc-section-lead" style="margin-top:6px;">If you nodded at even one of these, you&rsquo;re in the right place. <a class="process-link" href="<?= site_url('contact') ?>">Request your free website review &rarr;</a></p>
		</div>
	</div>
</section>

<!-- ========== WHY SYDNEY ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Why Sydney Small Businesses Need Website Design <span>Built for Them</span></h2>
			<p class="svc-section-lead">Sydney is a fast-moving, fiercely competitive market. From Surry Hills cafés to Western Sydney trades and North Shore professionals, every business is fighting for attention, and customers have plenty of choice. A specialist small business website design Sydney partner understands what makes this market different.</p>
			<div class="svc-symptoms">
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-map-pin-2-line"></i></div>
					<h4>Customers search by suburb</h4>
					<p>People look for &ldquo;electrician in Penrith&rdquo; or &ldquo;physio in Manly,&rdquo; not just a service. Your site needs to show up for those local searches.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-star-line"></i></div>
					<h4>Trust decides everything</h4>
					<p>Reviews, real photos, and clear pricing information help customers choose you over the business down the road.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-wallet-3-line"></i></div>
					<h4>Budgets are tight</h4>
					<p>You need a fair price, a clear timeline, and a website that earns its keep.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-time-line"></i></div>
					<h4>Time is precious</h4>
					<p>You&rsquo;re running a business, not learning web development. Your website should be easy to manage and easy to understand.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== WHAT YOU GET ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Custom Small Business Website Design in Sydney: <span>What You Get</span></h2>
			<p class="svc-section-lead">Every business is different, so we don&rsquo;t squeeze you into a generic template. Here&rsquo;s what goes into a website designed for your business.</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-palette-line"></i><h4>A design that looks like you (only better)</h4><p>We tailor colours, fonts, photography, and layout to your brand, whether you&rsquo;re a cool, creative studio or a serious, established professional. No logo or brand guide yet? We can help with that too.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-smartphone-line"></i><h4>Mobile-first design for Sydney on the go</h4><p>Sydneysiders are searching on trains, in cafés, and between meetings. We design for phones first, with big buttons, clear text, and tap-to-call links, so your website feels effortless on any screen.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-zap-line"></i><h4>Speed that keeps visitors around</h4><p>A slow website loses customers and can hurt your Google rankings. We build lean, optimised pages that load quickly, even on patchy connections.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-quill-pen-line"></i><h4>Words that sell</h4><p>Great design needs great copy. We write clear, friendly, customer-focused content that explains what you do, why you&rsquo;re good at it, and exactly what to do next. Written for real people, then optimised for search engines.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100">
						<i class="ri-shopping-bag-3-line"></i><h4>Stores, bookings, and enquiry forms</h4>
						<p>Sell products? Take appointments? Need quote requests? We add the tools that turn visitors into customers, so your website keeps working when you&rsquo;ve closed for the day.</p>
						<a class="process-link" href="<?= site_url('shopify-seo') ?>">Ecommerce-ready &rarr;</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-search-eye-line"></i><h4>SEO built in from the start</h4><p>A beautiful website only helps if people can find it. So every small business website design Sydney project we deliver has local SEO built in from day one.</p></div>
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
					<h2>Ready for a Website You&rsquo;re Proud to Share?</h2>
					<p>Your business deserves a website that works as hard as you do. We&rsquo;ll review your current website for free and show you exactly where you&rsquo;re losing enquiries &mdash; no pressure and no jargon.</p>
					<p style="margin-top:14px;color:rgba(255,255,255,.75);font-size:14px;">We only take on a limited number of new projects each month, so reach out today.</p>
				</div>
				<div class="col-lg-5 col-md-12 text-lg-right">
					<a href="<?= site_url('contact') ?>" class="btn btn-white mb-2">Get Your Free Website Quote</a>
					<p class="mt-2" style="color:rgba(255,255,255,.75);font-size:14px;"><i class="ri-phone-line"></i> Prefer to talk? Email <a href="mailto:<?= e(CONTACT_EMAIL) ?>" style="color:#fff;"><?= e(CONTACT_EMAIL) ?></a></p>
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
			<h2 class="sec-title">How Our Small Business Website Design <span>Process Works</span></h2>
			<p class="sec-lead">Building a website shouldn&rsquo;t feel like a mystery. Here&rsquo;s exactly what to expect.</p>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.1">
					<div class="step-circle"><i class="ri-search-line"></i><span class="step-num">1</span></div>
					<h4>We get to know your business</h4>
					<p>We start with a conversation about your services, your customers, your goals, and your competitors. The more we understand, the better your website will perform.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.2">
					<div class="step-circle"><i class="ri-pencil-ruler-line"></i><span class="step-num">2</span></div>
					<h4>We plan and design</h4>
					<p>We map out your pages and create a custom design that reflects your brand. You see it before we build it, and you tell us what to change.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.3">
					<div class="step-circle"><i class="ri-quill-pen-line"></i><span class="step-num">3</span></div>
					<h4>We write and optimise</h4>
					<p>We create clear, engaging content and set up the SEO essentials: page titles, meta descriptions, headings, image descriptions, and local search signals.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.4">
					<div class="step-circle"><i class="ri-code-box-line"></i><span class="step-num">4</span></div>
					<h4>We build and test</h4>
					<p>We develop your website and test it on phones, tablets, and desktops, in different browsers, and for speed. Forms, links, and tracking are all checked before launch.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.5">
					<div class="step-circle"><i class="ri-rocket-2-line"></i><span class="step-num">5</span></div>
					<h4>We launch and support you</h4>
					<p>We take your website live, connect your analytics and Google Business Profile, and show you how to make simple updates. After launch, we&rsquo;re still here for support and tweaks.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.6">
					<div class="step-circle"><i class="ri-line-chart-line"></i><span class="step-num">6</span></div>
					<h4>We measure and grow</h4>
					<p>With analytics and tracking in place, we review what&rsquo;s bringing in enquiries and keep improving. Content updates, local SEO, and ongoing support grow results over time.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== LOCAL SEO ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Local SEO for Sydney Small <span>Business Websites</span></h2>
			<p class="svc-section-lead">A beautiful website only helps if people can find it. That&rsquo;s why every small business website design Sydney project we deliver has local SEO built in from the start &mdash; so you get found in your suburb, not lost in a search for &ldquo;businesses near me.&rdquo;</p>
			<div class="svc-checks">
				<div class="svc-check">
					<i class="check-ic good ri-map-pin-2-line"></i>
					<div>
						<h4>Service and suburb pages</h4>
						<p>Pages that target searches like &ldquo;bookkeeper in Chatswood&rdquo; or &ldquo;landscaper in the Inner West.&rdquo;</p>
					</div>
				</div>
				<div class="svc-check">
					<i class="check-ic good ri-google-line"></i>
					<div>
						<h4>Google Business Profile alignment</h4>
						<p>Your website and your listing tell the same story &mdash; so search engines trust both.</p>
					</div>
				</div>
				<div class="svc-check">
					<i class="check-ic good ri-link"></i>
					<div>
						<h4>Consistent business details</h4>
						<p>Name, address, and phone number kept consistent across the web.</p>
					</div>
				</div>
				<div class="svc-check">
					<i class="check-ic good ri-code-s-slash-line"></i>
					<div>
						<h4>Local schema markup</h4>
						<p>Structured data that helps search engines understand your business and where you serve.</p>
					</div>
				</div>
				<div class="svc-check">
					<i class="check-ic good ri-star-line"></i>
					<div>
						<h4>Reviews and testimonials displayed clearly</h4>
						<p>Social proof that builds trust and helps you win the local click.</p>
					</div>
				</div>
				<div class="svc-check">
					<i class="check-ic good ri-line-chart-line"></i>
					<div>
						<h4>Analytics and enquiry tracking</h4>
						<p>So you can see which pages and suburbs are bringing in calls, bookings, and enquiries.</p>
					</div>
				</div>
			</div>
			<div class="mt-4">
				<h4 style="font-weight:700;margin-bottom:6px;">The technical stuff (we handle it)</h4>
				<p>Behind the scenes, we make sure your site is secure (HTTPS), mobile-friendly, fast, and easy for search engines to crawl. You won&rsquo;t need to think about any of it. <a class="process-link" href="<?= site_url('technical-seo-audits') ?>">See how we keep sites technically sound &rarr;</a></p>
				<h4 style="font-weight:700;margin-bottom:6px;">Content that answers customer questions</h4>
				<p>Helpful pages and blog posts answer the questions people ask before they buy. Over time, this builds your credibility and brings in visitors who are ready to book, buy, or call.</p>
			</div>
		</div>
	</div>
</section>

<!-- ========== FEATURES ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Features Your Small Business Website <span>Should Have</span></h2>
			<p class="svc-section-lead">We keep it practical. Every website includes the essentials that help you win and manage customers.</p>
			<div class="svc-checks">
				<div class="svc-check">
					<i class="check-ic good ri-phone-line"></i>
					<div><h4>Click-to-call and click-to-email buttons</h4><p>So customers can reach you in one tap.</p></div>
				</div>
				<div class="svc-check">
					<i class="check-ic good ri-mail-send-line"></i>
					<div><h4>Simple contact and quote forms</h4><p>Forms that take seconds to fill out.</p></div>
				</div>
				<div class="svc-check">
					<i class="check-ic good ri-map-2-line"></i>
					<div><h4>Google Maps and opening hours</h4><p>So people can find you easily.</p></div>
				</div>
				<div class="svc-check">
					<i class="check-ic good ri-star-line"></i>
					<div><h4>Testimonials and review integration</h4><p>Show your reputation at a glance.</p></div>
				</div>
				<div class="svc-check">
					<i class="check-ic good ri-image-line"></i>
					<div><h4>Photo galleries</h4><p>Showcase your work, products, or premises.</p></div>
				</div>
				<div class="svc-check">
					<i class="check-ic good ri-shopping-bag-3-line"></i>
					<div><h4>Online booking or ecommerce</h4><p>Where it suits your business.</p></div>
				</div>
				<div class="svc-check">
					<i class="check-ic good ri-share-line"></i>
					<div><h4>Social media integration</h4><p>Connect your website with your profiles.</p></div>
				</div>
				<div class="svc-check">
					<i class="check-ic good ri-bar-chart-line"></i>
					<div><h4>Analytics and enquiry tracking</h4><p>So you know what&rsquo;s working.</p></div>
				</div>
				<div class="svc-check">
					<i class="check-ic good ri-edit-line"></i>
					<div><h4>Easy content editing</h4><p>Update text, images, and offers yourself.</p></div>
				</div>
				<div class="svc-check">
					<i class="check-ic good ri-shield-check-line"></i>
					<div><h4>Security and backups</h4><p>Keep your website and your customers safe.</p></div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== WHO WE BUILD FOR ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Website Design for Every Type of <span>Sydney Small Business</span></h2>
			<p class="svc-section-lead">We work with small businesses across a wide range of industries, including:</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-tools-line"></i><h4>Trades and home services</h4><p>Plumbers, electricians, builders, and cleaners who live by local search and reviews.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-restaurant-line"></i><h4>Cafés, restaurants &amp; hospitality</h4><p>Venues that turn hungry searches into bookings and regulars.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-shopping-bag-3-line"></i><h4>Retail shops &amp; online stores</h4><p>High-street stores and ecommerce built to convert browsers into buyers.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-heart-pulse-line"></i><h4>Health, wellness &amp; beauty</h4><p>Clinics and studios that fill appointment books and build patient loyalty.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-briefcase-line"></i><h4>Professional services</h4><p>Accountants, lawyers, consultants, and advisers who win trust before the first meeting.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100">
						<i class="ri-building-2-line"></i><h4>Real estate &amp; property</h4>
						<p>Agents and agencies that turn website visitors into appraisals and listings.</p>
						<a class="process-link" href="<?= site_url('real-estate-website-design-australia') ?>">Real estate web design &rarr;</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-graduation-cap-line"></i><h4>Fitness, trainers &amp; education</h4><p>Studios, trainers, and providers building engaged memberships.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-rocket-2-line"></i><h4>Creative businesses &amp; start-ups</h4><p>New and growing teams that need a brand-led website from day one.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<a class="feature-card h-100" href="<?= site_url('contact') ?>" style="display:flex;flex-direction:column;text-decoration:none;background:rgba(228,2,43,.05);border-color:rgba(228,2,43,.25);">
						<i class="ri-question-line"></i><h4>Not sure if we fit?</h4>
						<p>From the CBD and Inner West to the Northern Beaches, North Shore, and Western Sydney, we build websites that reflect your community and your brand.</p>
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
			<h2 class="svc-section-title">Why Sydney Businesses Choose Us for <span>Small Business Website Design</span></h2>
			<p class="svc-section-lead">You have plenty of options when it comes to web design in Sydney. Here&rsquo;s why business owners choose us:</p>
			<div class="svc-symptoms">
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-user-heart-line"></i></div>
					<h4>We get small business</h4>
					<p>We know you&rsquo;re busy, budget-conscious, and wearing a dozen hats. We keep things simple and communicate clearly.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-target-line"></i></div>
					<h4>We care about results</h4>
					<p>A website should bring in enquiries, bookings, or sales. That&rsquo;s how we measure success.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-map-pin-2-line"></i></div>
					<h4>We know Sydney</h4>
					<p>We understand how local customers search, what they expect, and how to help you stand out in your suburb.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-chat-1-line"></i></div>
					<h4>We&rsquo;re upfront</h4>
					<p>Clear pricing, honest advice, and realistic timelines. No surprise costs, no confusing contracts.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-refresh-line"></i></div>
					<h4>We stick around</h4>
					<p>Your website should grow with your business. We offer ongoing support, updates, and SEO whenever you&rsquo;re ready. <a class="process-link" href="<?= site_url('ongoing-website-support') ?>">See ongoing support &rarr;</a></p>
				</div>
				<div class="svc-symptom">
					<a class="symptom-ic" href="<?= site_url('contact') ?>"><i class="ri-arrow-right-circle-line"></i></a>
					<h4>Ready to see the difference?</h4>
					<p>Request your free website review and find out exactly where your current site is losing enquiries. <a class="process-link" href="<?= site_url('contact') ?>">Get your free review &rarr;</a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== PRICING ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Small Business Website <span>Pricing and Timeline</span></h2>
			<p>We believe you should know what you&rsquo;re paying for before you commit. Cost depends on the number of pages, the features you need (like online booking or ecommerce), and whether you&rsquo;d like help with content or ongoing SEO.</p>
			<p>Most small business websites are completed within a few weeks, depending on how quickly we receive your content, images, and feedback. You&rsquo;ll get a clear quote and timeline upfront, with no hidden extras.</p>
			<p>Ready for a clear, itemized quote? <a class="process-link" href="<?= site_url('contact') ?>">Request your free website quote</a> and we&rsquo;ll outline the investment alongside what&rsquo;s included.</p>
		</div>
	</div>
</section>

<!-- ========== FAQ ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-question-answer-line"></i>FAQ</h3>
			<h2 class="sec-title">Small Business Website Design <span>Sydney FAQs</span></h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-12 mb-4">
				<div class="faq-wrap fadeInUp" data-delay="0.2">
					<i class="ri-question-answer-line"></i>
					<h2>Have a different question?</h2>
					<a href="<?= site_url('contact') ?>" class="btn btn-primary mb-2">Get a free quote</a>
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
					<a href="<?= site_url('contact') ?>" class="btn btn-white mb-2">Request Your Free Website Quote</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php require __DIR__ . '/../includes/footer.php';