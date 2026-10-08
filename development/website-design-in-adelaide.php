<?php
// =========================================================
// Website Design in Adelaide — service page
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$service = [
    'slug'      => 'website-design-in-adelaide',
    'title'     => 'Website Design in Adelaide',
    'pill'      => 'Adelaide Web Design',
    'metaTitle' => 'Website Design in Adelaide | Websites That Win Customers',
    'metaDesc'  => 'Professional website design in Adelaide plus website marketing to bring in local customers. Fast, affordable, SEO-ready websites. Get a free quote today.',
    'h1'        => 'Website Design in Adelaide: Websites Built to Win Local Customers',
    'lead'      => 'From the CBD and North Adelaide to Glenelg, the Adelaide Hills, and the northern and southern suburbs, South Australian businesses are competing for attention in a market where customers now search, compare, and decide online before they ever pick up the phone. We provide website design in Adelaide for businesses that want a website that does more than sit there looking nice &mdash; fast, professional, mobile-friendly sites backed by website marketing in Adelaide that helps the right customers actually find you.',
    'image'     => 'assets/img/development/adelaide-city.jpg',
    'imageAlt'  => 'Website design in Adelaide - fast, mobile-first websites built to win local customers',
    'related'   => ['small-business-seo', 'seo-management', 'ongoing-website-support'],

    'faqs' => [
        ['q' => 'How much does website design cost in Adelaide?', 'a' => 'Pricing depends on the size of your site, the features you need, and whether you want content writing or SEO included. Request a free quote and we&rsquo;ll give you a clear estimate based on your business &mdash; no hidden extras, no surprise costs.'],
        ['q' => 'What is website marketing and do I need it?', 'a' => 'Website marketing covers the activities that help people find your website, such as SEO, Google Ads, and content. Most businesses need at least some ongoing marketing, since even a great website won&rsquo;t generate enquiries if nobody can find it.'],
        ['q' => 'How long does it take to build a website?', 'a' => 'Most projects take a few weeks from kickoff to launch, depending on how quickly content, images, and feedback are provided. We&rsquo;ll share a schedule at the start so you always know where things stand.'],
        ['q' => 'Will my website show up on Google?', 'a' => 'We build every site with SEO best practices and local optimisation from day one. Rankings depend on competition and ongoing effort, and we offer website marketing services to help you climb further &mdash; see our <a class="process-link" href="' . site_url('small-business-seo') . '">small business SEO</a> service.'],
        ['q' => 'Can I update the website myself?', 'a' => 'Absolutely. We build on user-friendly platforms so you can update text, images, and offers yourself. We&rsquo;re also happy to handle updates for you through our <a class="process-link" href="' . site_url('ongoing-website-support') . '">ongoing website support</a>.'],
        ['q' => 'Do you offer ongoing website marketing after launch?', 'a' => 'Yes. We offer local SEO, content creation, and Google Ads management to help your Adelaide business keep growing after your website goes live.'],
        ['q' => 'I already have a website. Can you improve it or market it?', 'a' => 'Yes. We&rsquo;ll review your existing site and give you honest advice on whether a refresh, a rebuild, or a dedicated marketing strategy makes the most sense for your goals.'],
    ],

    'ctaTitle' => 'Let&rsquo;s Build (and Market) a Website That Grows Your Business',
    'ctaLead'  => 'Your business has worked hard to earn its reputation. Your website should help more Adelaide customers find you, trust you, and choose you. As your local partner for website design in Adelaide and website marketing in Adelaide, we&rsquo;ll build a fast, professional, SEO-ready website and help you get it in front of the right customers.',
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
				<span class="svc-kicker"><i class="ri-map-pin-2-line"></i>Adelaide based</span>
				<span class="svc-kicker"><i class="ri-smartphone-line"></i>Mobile-first</span>
				<span class="svc-kicker"><i class="ri-search-eye-line"></i>Marketing &amp; SEO built in</span>
				<span class="svc-kicker"><i class="ri-zap-line"></i>Fast by default</span>
			</div>
		</div>
	</div>
</section>

<!-- ========== SERVICE FEATURE IMAGE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="fadeInUp" data-delay="0.1">
			<img src="<?= file_asset('assets/img/development/adelaide-city.jpg') ?>" alt="<?= e($service['imageAlt']) ?>" class="img-fluid w-100" style="border-radius:20px;box-shadow:0 18px 40px rgba(10,22,44,.12);" loading="lazy">
		</div>
	</div>
</section>

<!-- ========== INTRO ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-intro fadeInUp" data-delay="0.1">
			<p>From the CBD and North Adelaide to Glenelg, the Adelaide Hills, and the northern and southern suburbs, South Australian businesses are competing for attention in a market where customers now search, compare, and decide online before they ever pick up the phone.</p>
			<p>We provide website design in Adelaide for businesses that want a website that does more than sit there looking nice. We build fast, professional, mobile-friendly websites, and back them up with website marketing in Adelaide that helps the right customers actually find you.</p>
			<p>Design gets you a great-looking website. Marketing gets you found. You need both, and that&rsquo;s exactly what we deliver.</p>
			<p><strong>Design gets you a great-looking website. Marketing gets you found &mdash; and we deliver both.</strong></p>
		</div>
	</div>
</section>

<!-- ========== WHY ADELAIDE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Why Adelaide Businesses Need Website Design <span>Built for Their Market</span></h2>
			<p class="svc-section-lead">Adelaide has its own rhythm. It&rsquo;s a close-knit business community where reputation travels fast, and customers often expect a personal touch even when they&rsquo;re searching online. A generic website builder or an interstate agency that&rsquo;s never set foot here won&rsquo;t understand that. Local website design in Adelaide means:</p>
			<div class="svc-symptoms">
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-map-pin-2-line"></i></div>
					<h4>Understanding the local market</h4>
					<p>From the wine regions to the eastern suburbs, we know how South Australian customers search and buy.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-chat-1-line"></i></div>
					<h4>Easy communication</h4>
					<p>Same time zone, straightforward conversations, and the option to meet locally if it helps.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-briefcase-line"></i></div>
					<h4>Design that fits your industry</h4>
					<p>Whether you&rsquo;re in trades, hospitality, retail, or professional services, we tailor your site to how your customers make decisions.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-search-eye-line"></i></div>
					<h4>A website built to be found, not just admired</h4>
					<p>Good design and good visibility go hand in hand, and both are part of every project we deliver.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== CUSTOM SERVICES ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Custom Website Design in Adelaide: <span>What We Build</span></h2>
			<p class="svc-section-lead">We don&rsquo;t believe in one-size-fits-all templates. Every website we build is designed around your brand, your services, and your customers.</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-palette-line"></i><h4>Custom design that reflects your brand</h4><p>We tailor colours, fonts, photography, and layout to your business, so your website looks like you, not a template shared by dozens of other local businesses.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-smartphone-line"></i><h4>Mobile-first website design</h4><p>Most Adelaide customers search on their phones, often while out and about. We design for small screens first, with clear buttons, readable text, and tap-to-call links, then scale up to tablets and desktops.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-rocket-2-line"></i><h4>Fast-loading, reliable websites</h4><p>A slow website frustrates visitors and can hurt your Google rankings. We build lean, optimised sites hosted on reliable infrastructure so your pages load quickly wherever your customers are.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-message-3-line"></i><h4>Clear messaging that converts</h4><p>Good design is more than looks. We write and structure your pages so visitors instantly understand what you offer and know exactly what to do next, whether that&rsquo;s calling, booking, or requesting a quote.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-shopping-bag-3-line"></i><h4>Ecommerce and booking tools</h4><p>If you sell products or take bookings, we can add online stores, appointment scheduling, and enquiry forms, so your website keeps working for you even outside business hours.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-search-eye-line"></i><h4>Website marketing built in</h4><p>A beautiful website that nobody finds is a wasted investment. That&rsquo;s why <a class="process-link" href="<?= site_url('small-business-seo') ?>">local SEO</a> and website marketing are part of every project, not an optional extra.</p></div>
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
					<p>A great website should bring in customers, not just look good. Talk to our Adelaide-based team about website design and website marketing in Adelaide. We&rsquo;ll review your current website for free and show you exactly what&rsquo;s holding it back &mdash; no pressure, no jargon.</p>
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

<!-- ========== WEBSITE MARKETING ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0 fadeInUp" data-delay="0.1">
				<img src="<?= file_asset('assets/img/development/website-marketing-adelaide.jpg') ?>" alt="Website marketing in Adelaide - local SEO, Google Ads, and content that help customers find your website" class="img-fluid" style="border-radius:20px;box-shadow:0 18px 40px rgba(10,22,44,.12);" loading="lazy">
			</div>
			<div class="col-lg-6 col-md-12 svc-section fadeInUp" data-delay="0.2">
				<h2 class="svc-section-title">Website Marketing in Adelaide: <span>Getting Found, Not Just Built</span></h2>
				<p class="svc-section-lead">A beautiful website that nobody finds is a wasted investment. That&rsquo;s why website marketing in Adelaide is just as important as the design itself, and it&rsquo;s built into every project we deliver, not treated as an optional extra.</p>
				<div class="svc-checks">
					<div class="svc-check"><i class="check-ic good ri-map-pin-2-line"></i><div><h4>Local SEO for Adelaide businesses</h4><p>Suburb and service pages, Google Business Profile optimisation, consistent business details, and local schema markup, so you show up for the searches people actually make.</p></div></div>
					<div class="svc-check"><i class="check-ic good ri-search-eye-line"></i><div><h4>On-page and technical SEO</h4><p>Headings, page titles, meta descriptions, and internal links optimised, with a site that&rsquo;s secure, mobile-friendly, and fast to crawl.</p></div></div>
					<div class="svc-check"><i class="check-ic good ri-megaphone-line"></i><div><h4>Google Ads and paid search</h4><p>Campaigns that put your business in front of Adelaide customers actively searching for what you offer &mdash; with clear tracking so you know what your budget is achieving.</p></div></div>
					<div class="svc-check"><i class="check-ic good ri-article-line"></i><div><h4>Content that builds trust</h4><p>Blog posts, guides, and FAQs that answer real customer questions, build authority, and bring in visitors who are researching before they buy or book.</p></div></div>
					
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
			<h2 class="sec-title">How Our Website Design and Marketing <span>Process Works</span></h2>
			<p class="sec-lead">We keep the process clear from start to finish.</p>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.1">
					<div class="step-circle"><i class="ri-search-line"></i><span class="step-num">1</span></div>
					<h4>Discovery and strategy</h4>
					<p>We learn about your business, your customers, your goals, and your competitors, and identify the keywords and opportunities that matter most.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.2">
					<div class="step-circle"><i class="ri-pencil-ruler-line"></i><span class="step-num">2</span></div>
					<h4>Design</h4>
					<p>We create a custom design that reflects your brand and guides visitors toward action. You review it and request changes before we build.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.3">
					<div class="step-circle"><i class="ri-quill-pen-line"></i><span class="step-num">3</span></div>
					<h4>Content and SEO setup</h4>
					<p>We write clear, engaging content and set up the SEO foundations, including titles, meta descriptions, and local search signals.</p>
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
					<h4>Launch and ongoing marketing</h4>
					<p>We launch your website, connect your analytics and Google Business Profile, and can continue supporting you with SEO, content, and paid advertising as your business grows.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== FEATURES ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Features That Make Adelaide Websites <span>Work Harder</span></h2>
			<p class="svc-section-lead">Every website we build includes tools designed to capture leads and support your ongoing marketing.</p>
			<div class="svc-checks">
				<div class="svc-check"><i class="check-ic good ri-phone-line"></i><div><h4>Click-to-call and click-to-email buttons</h4><p>So customers can reach you instantly.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-mail-send-line"></i><div><h4>Simple contact and quote request forms</h4><p>Forms that take seconds to fill out.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-map-2-line"></i><div><h4>Google Maps integration and clear business hours</h4><p>So people can find you easily.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-star-line"></i><div><h4>Testimonials and review integration</h4><p>Show your reputation at a glance.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-image-line"></i><div><h4>Photo galleries</h4><p>Showcase your work, products, or premises.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-shopping-bag-3-line"></i><div><h4>Online booking or ecommerce</h4><p>Where it&rsquo;s relevant to your business.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-bar-chart-line"></i><div><h4>Analytics and enquiry tracking</h4><p>So you can see what&rsquo;s working.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-edit-line"></i><div><h4>Easy content editing</h4><p>Update text, images, and offers yourself.</p></div></div>
			</div>
		</div>
	</div>
</section>

<!-- ========== WHO WE WORK WITH ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Who We Work With <span>Across Adelaide</span></h2>
			<p class="svc-section-lead">We provide website design and website marketing in Adelaide for businesses across a wide range of industries, including:</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-tools-line"></i><h4>Trades and home services</h4><p>From plumbers and electricians to builders and landscapers.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-restaurant-line"></i><h4>Hospitality</h4><p>Cafés, restaurants, and function venues that turn searches into bookings and regulars.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-shopping-bag-3-line"></i><h4>Retail and ecommerce stores</h4><p>High-street stores and online shops built to convert browsers into buyers.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-heart-pulse-line"></i><h4>Health, wellness and beauty</h4><p>Clinics and studios that fill appointment books and build client loyalty.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-briefcase-line"></i><h4>Professional services</h4><p>Accountants, lawyers, and consultants who win trust online before the first meeting.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-building-2-line"></i><h4>Real estate and property</h4><p>Agents and agencies that turn website visitors into appraisals and listings.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-cup-line"></i><h4>Wine, tourism and hospitality</h4><p>Businesses across the Adelaide Hills and wine regions that live on reputation and experience.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-heart-line"></i><h4>Not-for-profits and community organisations</h4><p>Organisations that need their message seen and their cause supported.</p></div>
				</div>
			</div>
			<p class="svc-section-lead">From the CBD to Marion, Modbury, Mawson Lakes, and beyond, we build websites that reflect your local market.</p>
		</div>
	</div>
</section>

<!-- ========== WHY CHOOSE US ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Why Choose Us for Website <span>Design in Adelaide</span></h2>
			<p class="svc-section-lead">There are plenty of options for website design in Adelaide. Here&rsquo;s what sets us apart:</p>
			<div class="svc-symptoms">
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-link"></i></div>
					<h4>We combine design and marketing</h4>
					<p>Your website is built to look great and to be found, not one or the other.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-map-pin-2-line"></i></div>
					<h4>We understand the local market</h4>
					<p>We know how South Australian customers search, shop, and decide.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-money-dollar-circle-line"></i></div>
					<h4>We&rsquo;re transparent</h4>
					<p>Clear pricing, honest advice, and realistic timelines, with no hidden costs.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-target-line"></i></div>
					<h4>We focus on results</h4>
					<p>More enquiries, more bookings, more sales &mdash; that&rsquo;s how we measure success.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-refresh-line"></i></div>
					<h4>We&rsquo;re here after launch</h4>
					<p>We offer ongoing support, updates, and website marketing to help your business keep growing.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== PRICING ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Website Design and <span>Marketing Pricing</span></h2>
			<p>Every business is different, so we tailor pricing to your goals. Website design costs depend on the number of pages, features, and whether you need ecommerce or booking tools. Website marketing costs depend on your industry, competition, and whether you choose <a class="process-link" href="<?= site_url('seo-management') ?>">SEO</a>, paid advertising, or both.</p>
			<p>We&rsquo;ll give you a clear, upfront quote with no hidden extras, so you know exactly what you&rsquo;re investing in and what it&rsquo;s expected to deliver.</p>
			<p>Ready for a clear, itemized quote? <a class="process-link" href="<?= site_url('contact') ?>">Request your free website quote</a> and we&rsquo;ll outline the investment alongside what&rsquo;s included.</p>
		</div>
	</div>
</section>

<!-- ========== FAQ ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-question-answer-line"></i>FAQ</h3>
			<h2 class="sec-title">Website Design in Adelaide <span>FAQs</span></h2>
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