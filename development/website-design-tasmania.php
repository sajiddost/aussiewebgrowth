<?php
// =========================================================
// Website Design Tasmania — service page
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$service = [
    'slug'      => 'website-design-tasmania',
    'title'     => 'Website Design Tasmania',
    'pill'      => 'Tasmanian Web Design',
    'metaTitle' => 'Website Design Tasmania | Websites for Local Businesses',
    'metaDesc'  => 'Website design in Tasmania for local businesses that want to be found. Fast, affordable, mobile-friendly websites. Get a free quote from our team today.',
    'h1'        => 'Website Design Tasmania: Websites Built for Local Businesses',
    'lead'      => 'From Hobart&rsquo;s waterfront to Launceston, Devonport, and the small towns in between, Tasmanian businesses have something that&rsquo;s hard to fake: genuine local character. Your website should reflect that, while still doing the practical job of bringing in customers. We provide website design in Tasmania for businesses that want a website that looks professional, works properly on mobile, and actually helps people find and choose them &mdash; no confusing tech talk, no bloated packages, just a website built around your business and your customers.',
    'image'     => 'assets/img/development/website-design-tasmania.jpg',
    'imageAlt'  => 'Website design in Tasmania - fast, affordable, mobile-friendly websites for local businesses',
    'related'   => ['small-business-seo', 'seo-management', 'ongoing-website-support'],

    'faqs' => [
        ['q' => 'How much does website design cost in Tasmania?', 'a' => 'Pricing depends on the size of your site, the features you need, and whether you want content writing or SEO included. Request a free quote and we&rsquo;ll give you a clear estimate based on your business &mdash; no hidden extras.'],
        ['q' => 'How long does it take to build a website?', 'a' => 'Most projects take a few weeks from kickoff to launch, depending on how quickly content, images, and approvals are provided. You&rsquo;ll get a clear timeline upfront.'],
        ['q' => 'Will my website show up on Google?', 'a' => 'We build every site with SEO best practices and local optimisation from day one. Rankings depend on competition and effort over time, and we can support ongoing SEO to help you climb &mdash; see our <a class="process-link" href="' . site_url('small-business-seo') . '">small business SEO</a> service.'],
        ['q' => 'Do you work with businesses outside Hobart and Launceston?', 'a' => 'Yes. We work with businesses right across Tasmania, including regional towns, and can meet remotely or in person depending on your location.'],
        ['q' => 'Can you build a website for a seasonal or tourism-based business?', 'a' => 'Yes. We design websites that can handle seasonal traffic spikes and showcase time-sensitive offers, tours, and events.'],
        ['q' => 'Can I update the website myself?', 'a' => 'Absolutely. We build on user-friendly platforms so you can update text, images, and offers yourself. We&rsquo;re also happy to handle updates for you through our <a class="process-link" href="' . site_url('ongoing-website-support') . '">ongoing website support</a>.'],
        ['q' => 'I already have a website. Can you improve it?', 'a' => 'We&rsquo;ll review your existing site and give you honest advice. If a refresh can fix the problems, we&rsquo;ll recommend it. If a full rebuild makes more sense, we&rsquo;ll explain why.'],
    ],

    'ctaTitle' => 'Let&rsquo;s Build a Website That Helps Your Tasmanian Business Grow',
    'ctaLead'  => 'Your business has worked hard to earn its reputation. Your website should help more Tasmanian customers and visitors find you, trust you, and choose you. As your dedicated partner for website design in Tasmania, we&rsquo;ll create a fast, professional, SEO-ready website that reflects the quality of your business and turns visitors into customers.',
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
				<span class="svc-kicker"><i class="ri-globe-line"></i>Local SEO built in</span>
				<span class="svc-kicker"><i class="ri-wallet-3-line"></i>Clear pricing</span>
				<span class="svc-kicker"><i class="ri-heart-line"></i>Local &amp; personal</span>
			</div>
		</div>
	</div>
</section>

<!-- ========== SERVICE FEATURE IMAGE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="fadeInUp" data-delay="0.1">
			<img src="<?= file_asset('assets/img/development/website-design-tasmania.jpg') ?>" alt="<?= e($service['imageAlt']) ?>" class="img-fluid w-100" style="border-radius:20px;box-shadow:0 18px 40px rgba(10,22,44,.12);" loading="lazy">
		</div>
	</div>
</section>

<!-- ========== INTRO ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-intro fadeInUp" data-delay="0.1">
			<p>From Hobart&rsquo;s waterfront to Launceston, Devonport, and the small towns in between, Tasmanian businesses have something that&rsquo;s hard to fake: genuine local character. Your website should reflect that, while still doing the practical job of bringing in customers.</p>
			<p>We provide website design in Tasmania for businesses that want a website that looks professional, works properly on mobile, and actually helps people find and choose them. No confusing tech talk, no bloated packages, just a website built around your business and your customers.</p>
			<p>Whether you&rsquo;re a Hobart caf&eacute;, a Launceston tradie, a tourism operator on the East Coast, or a specialty producer selling statewide, we&rsquo;ll build a site that suits your business and your budget.</p>
			<p><strong>A website built around your business and your customers.</strong></p>
		</div>
	</div>
</section>

<!-- ========== WHY LOCAL MATTERS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Why Tasmanian Businesses Need Website Design <span>Built for Them</span></h2>
			<p class="svc-section-lead">Tasmania is a smaller, close-knit market with its own rhythms: strong seasonal tourism, tight-knit local communities, and customers who often value a personal touch. A generic mainland template or an overseas provider rarely accounts for any of that. A specialist approach to website design in Tasmania means:</p>
			<div class="svc-symptoms">
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-sun-line"></i></div>
					<h4>Understanding seasonal demand</h4>
					<p>Tourism-driven businesses need websites that can handle traffic spikes and showcase seasonal offers.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-map-pin-2-line"></i></div>
					<h4>Local search matters</h4>
					<p>Customers search for &ldquo;plumber in Hobart&rdquo; or &ldquo;caf&eacute; in Launceston,&rdquo; not just a generic service.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-community-line"></i></div>
					<h4>Community and trust count for a lot</h4>
					<p>Real photos, genuine reviews, and a personal touch go a long way in a state where word of mouth still carries weight.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-wallet-3-line"></i></div>
					<h4>Budgets need to work harder</h4>
					<p>Many Tasmanian businesses are small and growing, so your website needs to be affordable and worth every dollar.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== CUSTOM SERVICES ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Custom Website Design for <span>Tasmanian Businesses</span></h2>
			<p class="svc-section-lead">We don&rsquo;t use one-size-fits-all templates. Every website is designed around your brand, your services, and your customers.</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-palette-line"></i><h4>A design that reflects your business</h4><p>We tailor colours, fonts, photography, and layout to your brand, whether you&rsquo;re a rustic farm-gate producer, a sleek Hobart caf&eacute;, or an established professional practice.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-smartphone-line"></i><h4>Mobile-first website design</h4><p>Most customers, including tourists planning their trip, search on their phones. We design for small screens first, with clear buttons, readable text, and tap-to-call links.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-speed-line"></i><h4>Fast-loading, reliable websites</h4><p>A slow website loses visitors and can hurt your Google rankings, especially frustrating for travellers on patchy regional connections. We build lean, optimised sites that load quickly wherever your customers are.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-calendar-check-line"></i><h4>Bookings, enquiries, and online stores</h4><p>Whether you take bookings for tours and accommodation, want enquiry forms for trade services, or sell products online, we build the tools that turn visitors into customers.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-search-eye-line"></i><h4>Local SEO foundations</h4><p>Location pages, <a class="process-link" href="<?= site_url('small-business-seo') ?>">Google Business Profile optimisation</a>, and local schema built in from day one, so Tasmanian customers and visitors can actually find you.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-heart-line"></i><h4>Built with the local market in mind</h4><p>Designs that understand Tasmania&rsquo;s seasons, communities, and tourism flows &mdash; not a mainland template dropped in.</p></div>
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
					<h2>Ready for a Website That Works as Hard as You Do?</h2>
					<p>Your business deserves a website that brings in customers, not just one that looks nice. Talk to our team about website design in Tasmania. We&rsquo;ll review your current website for free and show you exactly what&rsquo;s holding it back &mdash; no pressure, no jargon.</p>
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

<!-- ========== PROCESS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-compass-line"></i>Our process</h3>
			<h2 class="sec-title">Our Website Design <span>Process</span></h2>
			<p class="sec-lead">From discovery to launch and support, here&rsquo;s how we build your website.</p>
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
					<p>We build your website and test it across devices, browsers, and for speed, checking every form and link before launch.</p>
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

<!-- ========== LOCAL SEO ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0 fadeInUp" data-delay="0.1">
				<img src="<?= file_asset('assets/img/development/local-seo-tasmania.jpg') ?>" alt="Local SEO Tasmania - getting found by customers searching for your area" class="img-fluid" style="border-radius:20px;box-shadow:0 18px 40px rgba(10,22,44,.12);" loading="lazy">
			</div>
			<div class="col-lg-6 col-md-12 svc-section fadeInUp" data-delay="0.2">
				<h2 class="svc-section-title">Local SEO for <span>Tasmanian Businesses</span></h2>
				<p class="svc-section-lead">A great-looking website only helps if people can find it. Every website we build includes local SEO foundations, so you show up when Tasmanian customers (and visitors) search for what you offer.</p>
				<div class="svc-checks">
					<div class="svc-check"><i class="check-ic good ri-map-pin-2-line"></i><div><h4>Location pages</h4><p>For the areas you serve, from Hobart and the South to Launceston, the North West, and the East Coast.</p></div></div>
					<div class="svc-check"><i class="check-ic good ri-building-4-line"></i><div><h4>Google Business Profile optimisation</h4><p>So your website and listing tell the same story.</p></div></div>
					<div class="svc-check"><i class="check-ic good ri-file-list-3-line"></i><div><h4>Consistent business details</h4><p>Name, address, and phone kept consistent across the web.</p></div></div>
					<div class="svc-check"><i class="check-ic good ri-code-s-slash-line"></i><div><h4>Local schema markup</h4><p>Helping search engines understand your business and where you operate.</p></div></div>
					
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== FEATURES ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Features That Make Tasmanian Websites <span>Work Harder</span></h2>
			<p class="svc-section-lead">Practical, built-in features that turn visitors into enquiries, bookings, and sales.</p>
			<div class="svc-checks">
				<div class="svc-check"><i class="check-ic good ri-phone-line"></i><div><h4>Click-to-call and click-to-email buttons</h4><p>So customers can reach you instantly from any device.</p></div></div>
				
				<div class="svc-check"><i class="check-ic good ri-map-pin-2-line"></i><div><h4>Google Maps and clear opening hours</h4><p>So locals and visitors can find you without friction.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-star-line"></i><div><h4>Testimonials and review integration</h4><p>Real voices that build trust with new customers.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-gallery-line"></i><div><h4>Photo galleries</h4><p>Showcasing your work, products, or location.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-shopping-cart-line"></i><div><h4>Online booking or ecommerce</h4><p>Where it suits your business.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-megaphone-line"></i><div><h4>Seasonal offer and event banners</h4><p>For tourism and hospitality businesses.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-pie-chart-2-line"></i><div><h4>Analytics and enquiry tracking</h4><p>So you know what&rsquo;s working.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-edit-line"></i><div><h4>Easy content editing</h4><p>Update text, images, and offers yourself.</p></div></div>
			</div>
		</div>
	</div>
</section>

<!-- ========== BUSINESS TYPES ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Website Design for Every Type <span>of Tasmanian Business</span></h2>
			<p class="svc-section-lead">We work with businesses across a wide range of industries, including:</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-sailboat-line"></i><h4>Tourism operators</h4><p>Tours, accommodation, and attractions that turn browsers into bookers.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-cup-line"></i><h4>Hospitality</h4><p>From caf&eacute;s and restaurants to cellar doors and breweries.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-tools-line"></i><h4>Trades and home services</h4><p>Websites that turn local searches into calls and quotes.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-seedling-line"></i><h4>Farm-gate producers</h4><p>Specialty food and beverage brands telling their story.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-shopping-bag-3-line"></i><h4>Retail shops and online stores</h4><p>Storefronts that work for locals and visitors alike.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-heart-pulse-line"></i><h4>Health, wellness, and beauty</h4><p>Clinics and studios that welcome new clients.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-briefcase-line"></i><h4>Professional services</h4><p>Accountants, lawyers, and consultants building client trust.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-building-2-line"></i><h4>Real estate and property</h4><p>Showcase listings and capture seller enquiries.</p></div>
				</div>
			</div>
			<p class="svc-section-lead">From Hobart and Kingston to Launceston, Devonport, Burnie, and regional towns across the state, we build websites that reflect your local community.</p>
		</div>
	</div>
</section>

<!-- ========== WHY CHOOSE US ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Why Choose Us for Website Design <span>in Tasmania</span></h2>
			<p class="svc-section-lead">There are options for website design in Tasmania. Here&rsquo;s what sets us apart:</p>
			<div class="svc-symptoms">
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-empathize-line"></i></div>
					<h4>We understand the local market</h4>
					<p>We know how Tasmanian customers and visitors search, shop, and decide.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-wallet-3-line"></i></div>
					<h4>We keep things affordable</h4>
					<p>Clear pricing, honest recommendations, and no unnecessary extras.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-target-line"></i></div>
					<h4>We focus on results</h4>
					<p>A website should bring in enquiries, bookings, or sales, and that&rsquo;s how we measure success.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-refresh-line"></i></div>
					<h4>We&rsquo;re here after launch</h4>
					<p>We offer ongoing support, updates, and SEO as your business grows.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== PRICING ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Website Design Pricing <span>and Timeline</span></h2>
			<p>Every business is different, so we tailor pricing to your goals. Cost depends on the number of pages, the features you need, such as online booking or ecommerce, and whether you&rsquo;d like help with content or <a class="process-link" href="<?= site_url('seo-management') ?>">ongoing SEO</a>.</p>
			<p>Most websites are completed within a few weeks, depending on how quickly we receive your content, images, and feedback. You&rsquo;ll get a clear quote and timeline upfront, with no hidden extras.</p>
			<p>Ready for a clear, itemized quote? <a class="process-link" href="<?= site_url('contact') ?>">Request your free website quote</a> and we&rsquo;ll outline the investment alongside what&rsquo;s included.</p>
		</div>
	</div>
</section>

<!-- ========== FAQ ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-question-answer-line"></i>FAQ</h3>
			<h2 class="sec-title">Website Design Tasmania <span>FAQs</span></h2>
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