<?php
// =========================================================
// Website Design Perth Western Australia — service page
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$service = [
    'slug'      => 'website-design-perth-western-australia',
    'title'     => 'Website Design Perth Western Australia',
    'pill'      => 'Perth Web Design',
    'metaTitle' => 'Website Design Perth Western Australia | Perth WD Company',
    'metaDesc'  => 'A Perth website design company building fast, affordable websites for Western Australian businesses. See our prices and maintenance packages. Free quote.',
    'h1'        => 'Website Design Perth Western Australia: Websites Built to Grow Your Business',
    'lead'      => 'From Fremantle to Joondalup, Rockingham to the Perth Hills, Western Australian businesses are competing harder than ever for local attention. Your website is often the first, and sometimes only, chance you get to convince someone you&rsquo;re the right choice. We build fast, professional, mobile-friendly websites that make a strong first impression and turn visitors into enquiries, bookings, and sales &mdash; designed for the way WA customers actually search.',
    'image'     => 'assets/img/development/perth-western-australia.jpg',
    'imageAlt'  => 'Website design Perth Western Australia - fast, mobile-first websites built to grow your WA business',
    'related'   => ['small-business-seo', 'seo-management', 'ongoing-website-support'],

    'faqs' => [
        ['q' => 'What are typical website design prices in Perth?', 'a' => 'Pricing depends on the number of pages, features, and whether you need ecommerce, content writing, or SEO included. Request a free quote and we&rsquo;ll give you a clear, tailored estimate for your business &mdash; no hidden extras, no surprise costs.'],
        ['q' => 'Do you offer website maintenance packages in Perth?', 'a' => 'Yes. We offer a range of website maintenance packages covering updates, backups, security monitoring, and minor content changes, so your website stays safe and up to date after launch.'],
        ['q' => 'How long does it take to build a website?', 'a' => 'Most projects take a few weeks from kickoff to launch. Timelines depend on how quickly content, images, and feedback are provided, and we&rsquo;ll share a schedule at the start.'],
        ['q' => 'Will my website show up on Google?', 'a' => 'We build every site with SEO best practices and local optimisation from day one. Rankings depend on competition and ongoing effort, and we offer SEO support to help you climb further &mdash; see our <a class="process-link" href="' . site_url('small-business-seo') . '">small business SEO</a> service.'],
        ['q' => 'Can I take over an existing website for maintenance only?', 'a' => 'In most cases, yes. We can review your current website and take on maintenance without a full rebuild, giving you reliable local support.'],
        ['q' => 'Can I update the website myself?', 'a' => 'Absolutely. We build on user-friendly platforms so you can make simple updates yourself. If you&rsquo;d rather not, our maintenance packages can cover this for you through our <a class="process-link" href="' . site_url('ongoing-website-support') . '">ongoing website support</a>.'],
        ['q' => 'Do you work with businesses outside the Perth metro area?', 'a' => 'Yes. We work with businesses across Western Australia, including regional areas, and can meet remotely or in person depending on your location.'],
    ],

    'ctaTitle' => 'Let&rsquo;s Build a Website That Works for Your WA Business',
    'ctaLead'  => 'Your business has worked hard to earn its reputation. Your website should help more Perth and WA customers find you, trust you, and choose you. As your local Perth website design company, we&rsquo;ll create a fast, professional, SEO-ready website, provide clear pricing, and support it with a website maintenance package if you need one &mdash; so your online presence keeps working long after launch.',
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
				<span class="svc-kicker"><i class="ri-map-pin-2-line"></i>Perth based</span>
				<span class="svc-kicker"><i class="ri-smartphone-line"></i>Mobile-first</span>
				<span class="svc-kicker"><i class="ri-search-eye-line"></i>Local SEO built in</span>
				<span class="svc-kicker"><i class="ri-zap-line"></i>Fast by default</span>
			</div>
		</div>
	</div>
</section>

<!-- ========== SERVICE FEATURE IMAGE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="fadeInUp" data-delay="0.1">
			<img src="<?= file_asset('assets/img/development/perth-western-australia.jpg') ?>" alt="<?= e($service['imageAlt']) ?>" class="img-fluid w-100" style="border-radius:20px;box-shadow:0 18px 40px rgba(10,22,44,.12);" loading="lazy">
		</div>
	</div>
</section>

<!-- ========== INTRO ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-intro fadeInUp" data-delay="0.1">
			<p>From Fremantle to Joondalup, Rockingham to the Perth Hills, Western Australian businesses are competing harder than ever for local attention. Your website is often the first &mdash; and sometimes only &mdash; chance you get to convince someone you&rsquo;re the right choice.</p>
			<p>We provide website design in Perth, Western Australia for businesses that want more than a website that just sits there. We build fast, professional, mobile-friendly sites that make a strong first impression and turn visitors into enquiries, bookings, and sales.</p>
			<p>Whether you&rsquo;re a tradie in Armadale, a café in Subiaco, or a growing service business in the CBD, we&rsquo;ll design a website that works as hard as you do.</p>
			<p><strong>A website that works as hard as you do &mdash; turning local searches into enquiries, day in and day out.</strong></p>
		</div>
	</div>
</section>

<!-- ========== WHO WE ARE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Perth Website Design Company: <span>Who We Are and How We Help</span></h2>
			<p class="svc-section-lead">As a Perth website design company, we work exclusively with Western Australian businesses, which means we understand the local market, the local competition, and the way WA customers search and buy.</p>
			<p class="svc-section-lead">Here&rsquo;s what sets a local Perth website design company apart from an interstate or overseas provider:</p>
			<div class="svc-symptoms">
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-time-line"></i></div>
					<h4>Same time zone, faster communication</h4>
					<p>No waiting overnight for replies or juggling awkward call times.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-map-pin-2-line"></i></div>
					<h4>Local market knowledge</h4>
					<p>We understand Perth suburbs, WA industries, and seasonal demand patterns that affect your business.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-emotion-happy-line"></i></div>
					<h4>Face-to-face when it helps</h4>
					<p>We can meet in person to talk through your project, not just over email.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-database-2-line"></i></div>
					<h4>Understanding of the WA economy</h4>
					<p>From mining and trades to hospitality and professional services, we know how different Perth industries sell online.</p>
				</div>
			</div>
			<p class="svc-section-lead">Our team designs, builds, and supports your website from a single local point of contact, so you always know who you&rsquo;re talking to.</p>
		</div>
	</div>
</section>

<!-- ========== CUSTOM SERVICES ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Custom Website Design Services <span>for Perth Businesses</span></h2>
			<p class="svc-section-lead">Every business is different, so we don&rsquo;t rely on cookie-cutter templates. Here&rsquo;s what we build for Perth and WA businesses.</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-palette-line"></i><h4>Custom design that reflects your brand</h4><p>We tailor colours, fonts, imagery, and layout to your business, so your website looks like you rather than a generic template used by half of Perth.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-smartphone-line"></i><h4>Mobile-first website design</h4><p>Most WA customers search on their phones, often on the go. We design for small screens first, with clear buttons, readable text, and tap-to-call links.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-zap-line"></i><h4>Fast, reliable websites</h4><p>A slow website loses customers and can hurt your Google rankings. We build lean, optimised sites hosted on reliable infrastructure so your pages load quickly, wherever your customers are.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-shopping-bag-3-line"></i><h4>Ecommerce and online stores</h4><p>Selling products? We build secure, easy-to-manage online stores with local shipping, payment options, and product management built in.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-mail-send-line"></i><h4>Booking, quote, and enquiry tools</h4><p>We add the tools your business needs to capture leads, from simple contact forms to booking systems and quote request forms, so enquiries land straight in your inbox.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-search-eye-line"></i><h4>Local SEO built in from the start</h4><p>A beautiful website only helps if people can find it. Every site we build includes local SEO foundations so it shows up for the Perth searches that matter.</p></div>
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
					<h2>Want to See What a Better Website Could Do for Your Business?</h2>
					<p>A great website should bring in customers, not just sit there looking nice. Talk to our Perth website design company. We&rsquo;ll review your current website for free and show you exactly where you&rsquo;re losing enquiries &mdash; no pressure, no jargon, just honest advice.</p>
					<p style="margin-top:14px;color:rgba(255,255,255,.75);font-size:14px;">We take on a limited number of new projects each month, so get in touch today.</p>
				</div>
				<div class="col-lg-5 col-md-12 text-lg-right">
					<a href="<?= site_url('contact') ?>" class="btn btn-white mb-2">Get Your Free Website Quote</a>
					<p class="mt-2" style="color:rgba(255,255,255,.75);font-size:14px;"><i class="ri-phone-line"></i> Prefer to talk? Email <a href="mailto:<?= e(CONTACT_EMAIL) ?>" style="color:#fff;"><?= e(CONTACT_EMAIL) ?></a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== PRICING ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Perth Website Design Prices: <span>What You Can Expect to Pay</span></h2>
			<p class="svc-section-lead">One of the most common questions we get is about Perth website design prices. Costs vary depending on your needs, but here&rsquo;s a general guide to help you budget:</p>
			<div class="svc-checks">
				<div class="svc-check"><i class="check-ic good ri-store-line"></i><div><h4>Starter websites</h4><p>A simple, professional online presence for small businesses &mdash; typically a handful of pages with contact and enquiry forms.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-briefcase-4-line"></i><div><h4>Standard business websites</h4><p>More pages, stronger branding, content writing, and local SEO foundations &mdash; suited to businesses wanting a more complete online presence.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-shopping-bag-3-line"></i><div><h4>Ecommerce websites</h4><p>For businesses selling products online, with product pages, secure checkout, and payment integration. Pricing depends on your catalogue size and required features.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-code-s-slash-line"></i><div><h4>Custom and advanced websites</h4><p>Bespoke functionality, integrations, or web applications &mdash; priced according to the complexity of the build.</p></div></div>
			</div>
			<p>Rather than locking you into a rigid package that may include things you don&rsquo;t need (or leave out things you do), we provide a tailored quote based on your goals, your industry, and the features that will actually help your business. <a class="process-link" href="<?= site_url('contact') ?>">Request a free quote</a> and we&rsquo;ll give you clear, upfront pricing with no hidden costs.</p>
			<div style="margin-top:34px;">
				<h4 style="font-weight:700;margin-bottom:6px;">What affects website design prices in Perth?</h4>
				<div class="svc-symptoms">
					<div class="svc-symptom"><div class="symptom-ic"><i class="ri-file-list-3-line"></i></div><h4>Pages and complexity</h4><p>The number of pages and the complexity of your site structure influence the price.</p></div>
					<div class="svc-symptom"><div class="symptom-ic"><i class="ri-function-line"></i></div><h4>Features</h4><p>Whether you need ecommerce, bookings, or custom features changes the scope of work.</p></div>
					<div class="svc-symptom"><div class="symptom-ic"><i class="ri-quill-pen-line"></i></div><h4>Copywriting</h4><p>Whether you need professional copywriting or will supply your own content.</p></div>
					<div class="svc-symptom"><div class="symptom-ic"><i class="ri-search-eye-line"></i></div><h4>SEO</h4><p>Whether you want SEO built in from the start or added later.</p></div>
					
				</div>
				<p style="margin-top:8px;">We&rsquo;ll walk you through these during your quote so you understand exactly what you&rsquo;re paying for and why.</p>
			</div>
		</div>
	</div>
</section>

<!-- ========== PROCESS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-compass-line"></i>Our process</h3>
			<h2 class="sec-title">How Our Perth Website Design <span>Process Works</span></h2>
			<p class="sec-lead">Building a website with our Perth website design company is straightforward from start to finish.</p>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.1">
					<div class="step-circle"><i class="ri-search-line"></i><span class="step-num">1</span></div>
					<h4>Discovery and planning</h4>
					<p>We learn about your business, your customers, and your goals, and map out the pages and features your website needs.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.2">
					<div class="step-circle"><i class="ri-pencil-ruler-line"></i><span class="step-num">2</span></div>
					<h4>Design</h4>
					<p>We create a custom design that reflects your brand. You review it and request changes before we build anything.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.3">
					<div class="step-circle"><i class="ri-quill-pen-line"></i><span class="step-num">3</span></div>
					<h4>Content and SEO setup</h4>
					<p>We write clear, engaging content and set up the SEO essentials, including page titles, meta descriptions, and local search signals.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.4">
					<div class="step-circle"><i class="ri-code-box-line"></i><span class="step-num">4</span></div>
					<h4>Development and testing</h4>
					<p>We build your website and test it across devices and browsers, and for speed, checking every form, link, and feature before launch.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.5">
					<div class="step-circle"><i class="ri-rocket-2-line"></i><span class="step-num">5</span></div>
					<h4>Launch and support</h4>
					<p>We launch your site, connect your analytics and Google Business Profile, and show you how to make simple updates yourself.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== MAINTENANCE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0 fadeInUp" data-delay="0.1">
				<img src="<?= file_asset('assets/img/development/website-maintainance-perth-western-australia.jpg') ?>" alt="Website maintenance packages Perth - ongoing support from your local website design team" class="img-fluid" style="border-radius:20px;box-shadow:0 18px 40px rgba(10,22,44,.12);max-height:420px;" loading="lazy">
			</div>
			<div class="col-lg-6 col-md-12 svc-section fadeInUp" data-delay="0.2">
				<h2 class="svc-section-title">Website Maintenance Packages Perth: <span>Keeping Your Site Running Smoothly</span></h2>
				<p class="svc-section-lead">A website isn&rsquo;t a &ldquo;build it and forget it&rdquo; project. Software needs updating, security needs monitoring, and content needs refreshing. That&rsquo;s why we offer website maintenance packages for Perth businesses that want peace of mind after launch.</p>
				<div class="svc-checks">
					<div class="svc-check"><i class="check-ic good ri-shield-check-line"></i><div><h4>Software and security updates</h4><p>Keep your website safe and running smoothly.</p></div></div>
					<div class="svc-check"><i class="check-ic good ri-database-2-line"></i><div><h4>Regular backups</h4><p>So your website can be restored quickly if something goes wrong.</p></div></div>
					<div class="svc-check"><i class="check-ic good ri-monitor-line"></i><div><h4>Uptime and performance monitoring</h4><p>Catch issues before your customers do.</p></div></div>
					<div class="svc-check"><i class="check-ic good ri-edit-line"></i><div><h4>Minor content updates</h4><p>Text changes, new images, or updated hours and offers.</p></div></div>
					<div class="svc-check"><i class="check-ic good ri-headphone-line"></i><div><h4>Priority support</h4><p>When you need something fixed or changed quickly.</p></div></div>
					<div class="svc-check"><i class="check-ic good ri-line-chart-line"></i><div><h4>Reporting</h4><p>So you can see what&rsquo;s been done and how your website is performing.</p></div></div>
				</div>
				<p>We offer a few tiers of website maintenance packages in Perth, from basic security and backup cover through to more comprehensive plans that include regular content updates and ongoing SEO support. If you already have a website built by someone else, we can often take over maintenance without a rebuild, so you get reliable local support without starting from scratch.</p>
			</div>
		</div>
	</div>
</section>

<!-- ========== LOCAL SEO ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Local SEO for Perth <span>and WA Businesses</span></h2>
			<p class="svc-section-lead">A great website only works if people can find it. Every website we build includes local SEO foundations, and we offer ongoing SEO support for businesses that want to grow further. That includes:</p>
			<div class="svc-checks">
				<div class="svc-check"><i class="check-ic good ri-map-pin-2-line"></i><div><h4>Suburb and service pages</h4><p>Targeting the areas you serve across Perth and WA, from Fremantle to Joondalup and the Hills.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-google-line"></i><div><h4>Google Business Profile optimisation</h4><p>So your website and listing tell the same story.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-link"></i><div><h4>Consistent business details</h4><p>Name, address, and phone number kept consistent across the web.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-code-s-slash-line"></i><div><h4>Local schema markup</h4><p>Structured data that helps search engines understand your business and where you serve.</p></div></div>
			</div>
			<div class="mt-4">
				<p><strong>The technical stuff (we handle it).</strong> Behind the scenes, we make sure your site is secure, mobile-friendly, fast, and easy for search engines to crawl &mdash; you won&rsquo;t need to think about any of it. <a class="process-link" href="<?= site_url('technical-seo-audits') ?>">See how we keep sites technically sound &rarr;</a></p>
			</div>
		</div>
	</div>
</section>

<!-- ========== WHO WE WORK WITH ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Who We Work With <span>Across Perth and WA</span></h2>
			<p class="svc-section-lead">As a Perth website design company, we work with businesses across a wide range of Western Australian industries, including:</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-tools-line"></i><h4>Trades and home services</h4><p>From plumbers and electricians to builders and landscapers.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-briefcase-line"></i><h4>Professional services</h4><p>Accountants, lawyers, and consultants who win trust online before the first meeting.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-restaurant-line"></i><h4>Hospitality</h4><p>Cafés, restaurants, and venues that turn searches into bookings and regulars.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-shopping-bag-3-line"></i><h4>Retail and ecommerce</h4><p>High-street stores and online shops built to convert browsers into buyers.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-heart-pulse-line"></i><h4>Health, wellness and beauty</h4><p>Clinics and studios that fill appointment books and build client loyalty.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-building-2-line"></i><h4>Real estate and property</h4><p>Agents and agencies that turn website visitors into appraisals and listings. <a class="process-link" href="<?= site_url('real-estate-website-design-australia') ?>">Real estate web design &rarr;</a></p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-hard-drive-2-line"></i><h4>Mining services and industrial suppliers</h4><p>Companies that serve the WA resource sector with credibility and scale.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-heart-line"></i><h4>Not-for-profits and community organisations</h4><p>Organisations that need their message seen and their cause supported.</p></div>
				</div>
			</div>
			<p class="svc-section-lead">From the Perth CBD to Joondalup, Rockingham, Mandurah, and the Perth Hills, we build websites that reflect your business and your local market.</p>
		</div>
	</div>
</section>

<!-- ========== WHY CHOOSE US ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Why Choose Our Perth Website <span>Design Company</span></h2>
			<p class="svc-section-lead">There are plenty of options for website design in Perth. Here&rsquo;s what makes us different:</p>
			<div class="svc-symptoms">
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-map-pin-2-line"></i></div>
					<h4>We&rsquo;re local</h4>
					<p>We understand Western Australian businesses and customers, not a generic national template.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-money-dollar-circle-line"></i></div>
					<h4>We&rsquo;re transparent about pricing</h4>
					<p>You&rsquo;ll get a clear quote, with Perth website design prices explained upfront and no hidden extras.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-refresh-line"></i></div>
					<h4>We&rsquo;re here after launch</h4>
					<p>Our website maintenance packages keep your Perth business online, secure, and up to date long after the initial build.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-chat-1-line"></i></div>
					<h4>We communicate clearly</h4>
					<p>No jargon, no confusing contracts, just honest advice and realistic timelines.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== FAQ ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-question-answer-line"></i>FAQ</h3>
			<h2 class="sec-title">Website Design Perth Western Australia <span>FAQs</span></h2>
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