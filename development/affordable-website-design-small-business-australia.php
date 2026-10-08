<?php
// =========================================================
// Affordable Website Design for Small Business Australia — service page
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$service = [
    'slug'      => 'affordable-website-design-small-business-australia',
    'title'     => 'Affordable Website Design for Small Business Australia',
    'pill'      => 'Affordable Web Design',
    'metaTitle' => 'Affordable Website Design for Small Business Australia',
    'metaDesc'  => 'Affordable website design for small business across Australia. Fast, professional, mobile-friendly websites without the agency price tag. Free quote today.',
    'h1'        => 'Affordable Website Design for Small Business Australia',
    'lead'      => 'Running a small business means every dollar has to earn its place. A website shouldn&rsquo;t be the exception. You don&rsquo;t need a five-figure agency project to get a professional, effective website. You need the right website, built efficiently, at a fair price. We provide affordable website design for small business owners across Australia, from Perth to Cairns and everywhere in between &mdash; fast, mobile-friendly, professional websites, without the bloated packages, the confusing quotes, or the agency mark-up.',
    'image'     => 'assets/img/development/affordable-website-design-australia.png',
    'imageAlt'  => 'Affordable website design for small business Australia - fast, professional, mobile-friendly websites without the agency price tag',
    'related'   => ['small-business-seo', 'seo-management', 'ongoing-website-support'],

    'faqs' => [
        ['q' => 'How much does an affordable small business website cost?', 'a' => 'It depends on the number of pages and features you need. A simple website costs far less than one with ecommerce or booking systems. Request a free quote and we&rsquo;ll give you a clear, honest estimate.'],
        ['q' => 'Will an affordable website still look professional?', 'a' => 'Yes. Affordable doesn&rsquo;t mean generic or low quality. We tailor the design to your brand using efficient processes, so your website looks professional without an inflated price tag.'],
        ['q' => 'Should I use a DIY website builder instead?', 'a' => 'DIY builders can work for very simple needs, but they take your time to build and maintain, and often use generic templates. A professionally built website is usually a better investment if you want a polished result without doing the work yourself.'],
        ['q' => 'Can I add more features later, like an online store?', 'a' => 'Yes. We can build your website to grow with your business, so you can add ecommerce, booking systems, or additional pages down the track rather than paying for everything upfront.'],
        ['q' => 'Do I need SEO from the start, or can I add it later?', 'a' => 'Every website we build includes basic SEO foundations. More advanced, ongoing SEO can be added later once your budget allows, without needing to rebuild your site.'],
        ['q' => 'How long does it take to build an affordable website?', 'a' => 'Simple small business websites are often completed within a few weeks, depending on how quickly content and feedback are provided.'],
        ['q' => 'Do you offer support after the website is live?', 'a' => 'Yes. We can show you how to make basic updates yourself, and we&rsquo;re available for ongoing support or maintenance if you&rsquo;d prefer to leave it to us.'],
    ],

    'ctaTitle' => 'Let&rsquo;s Build a Website That Fits Your Budget',
    'ctaLead'  => 'You don&rsquo;t need to overspend to get a website that works. With the right approach, affordable website design for your small business can still be professional, effective, and built to grow with you. Wherever you are in Australia, we&rsquo;ll create a fast, mobile-friendly, SEO-ready website that suits your business and your budget.',
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
				<span class="svc-kicker"><i class="ri-wallet-3-line"></i>Budget-friendly</span>
				<span class="svc-kicker"><i class="ri-smartphone-line"></i>Mobile-first</span>
				<span class="svc-kicker"><i class="ri-search-eye-line"></i>SEO foundations built in</span>
				<span class="svc-kicker"><i class="ri-pencil-ruler-line"></i>Custom design</span>
			</div>
		</div>
	</div>
</section>

<!-- ========== SERVICE FEATURE IMAGE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="fadeInUp" data-delay="0.1">
			<img src="<?= file_asset('assets/img/development/affordable-website-design-australia.png') ?>" alt="<?= e($service['imageAlt']) ?>" class="img-fluid w-100" style="border-radius:20px;box-shadow:0 18px 40px rgba(10,22,44,.12);" loading="lazy">
		</div>
	</div>
</section>

<!-- ========== INTRO ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-intro fadeInUp" data-delay="0.1">
			<p>Running a small business means every dollar has to earn its place. A website shouldn&rsquo;t be the exception. You don&rsquo;t need a five-figure agency project to get a professional, effective website. You need the right website, built efficiently, at a fair price.</p>
			<p>We provide affordable website design for small business owners across Australia, from <a class="process-link" href="<?= site_url('website-design-perth-western-australia') ?>">Perth</a> to Cairns and everywhere in between. Fast, mobile-friendly, professional websites, without the bloated packages, the confusing quotes, or the agency mark-up.</p>
			<p>You get a site that looks great, works properly, and brings in customers, at a price that makes sense for a small business.</p>
			<p><strong>A website shouldn&rsquo;t be the exception to the way you spend every other dollar.</strong></p>
		</div>
	</div>
</section>

<!-- ========== AFFORDABLE VS CHEAP ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Why &ldquo;Affordable&rdquo; Doesn&rsquo;t Have to Mean <span>Cheap or Basic</span></h2>
			<p class="svc-section-lead">There&rsquo;s a difference between an affordable website and a cheap one. A cheap website is often a generic template, thrown together quickly, with little thought for your brand, your customers, or how you&rsquo;ll be found on Google. An affordable website, done properly, still delivers:</p>
			<div class="svc-symptoms">
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-palette-line"></i></div>
					<h4>Professional design that builds trust</h4>
					<p>A design that reflects your brand and builds trust with visitors.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-smartphone-line"></i></div>
					<h4>Mobile-friendly performance</h4>
					<p>Works well on the devices most customers actually use.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-file-text-line"></i></div>
					<h4>Clear, useful content</h4>
					<p>Explains what you do and why customers should choose you.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-search-eye-line"></i></div>
					<h4>Basic SEO foundations</h4>
					<p>So search engines can find and understand your site.</p>
				</div>
			</div>
			<p class="svc-section-lead">The key is working with a team that keeps overheads reasonable and focuses your budget on what actually matters, rather than padding out a package with features you&rsquo;ll never use.</p>
		</div>
	</div>
</section>

<!-- ========== PRICING FACTORS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">What Affects the Price of a <span>Small Business Website</span></h2>
			<p class="svc-section-lead">Understanding what drives cost helps you spend your budget where it counts. The main factors are:</p>
			<div class="svc-checks">
				<div class="svc-check"><i class="check-ic good ri-file-list-3-line"></i><div><h4>Number of pages</h4><p>A simple five-page website costs less than a large multi-service site with dozens of pages.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-pencil-ruler-line"></i><div><h4>Custom design vs template-based design</h4><p>A fully custom design takes more time than a well-executed, professionally customised template.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-quill-pen-line"></i><div><h4>Content writing</h4><p>Providing your own text keeps costs down; professional copywriting adds to the price but often improves results.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-shopping-cart-line"></i><div><h4>Ecommerce or booking features</h4><p>Online stores and booking systems add complexity and cost compared to a simple contact form.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-search-line"></i><div><h4>SEO and ongoing marketing</h4><p>Basic SEO foundations can be included in your build; deeper, <a class="process-link" href="<?= site_url('seo-management') ?>">ongoing SEO</a> is usually a separate investment.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-refresh-line"></i><div><h4>Maintenance and support</h4><p>Some providers include a period of support; ongoing maintenance is often a separate, optional cost.</p></div></div>
			</div>
			<p class="svc-section-lead">When you understand these factors, you can make informed choices about where to spend and where to simplify.</p>
		</div>
	</div>
</section>

<!-- ========== WHAT WE OFFER ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Affordable Website Design for Small Business: <span>What We Offer</span></h2>
			<p class="svc-section-lead">We keep our process efficient so we can keep prices fair, without cutting corners on quality.</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-palette-line"></i><h4>Custom design on a small business budget</h4><p>We tailor your website to your brand using efficient, proven design processes, so you get a professional look without paying for unnecessary custom development.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-smartphone-line"></i><h4>Mobile-first, fast-loading websites</h4><p>Most of your customers will visit on their phones. We build lean, optimised websites that load quickly and look great on any screen size, which also helps with Google rankings.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-focus-3-line"></i><h4>Only the features you actually need</h4><p>We help you decide what your website really needs, rather than upselling features you won&rsquo;t use. A simple, well-built site with the essentials will often outperform an over-complicated one.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-search-eye-line"></i><h4>SEO foundations built in</h4><p>Every website includes the SEO basics &mdash; clean structure, proper headings, meta titles and descriptions, and mobile-friendliness &mdash; so you have a solid foundation to build on, whether or not you invest in <a class="process-link" href="<?= site_url('seo-management') ?>">ongoing SEO</a> straight away.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-price-tag-3-line"></i><h4>Simple, transparent pricing</h4><p>You&rsquo;ll get a clear quote upfront with no hidden extras, so you know exactly what you&rsquo;re paying for and why.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-heart-line"></i><h4>Built to grow with you</h4><p>Start lean and add ecommerce, booking, or extra pages later &mdash; without ever needing a rebuild.</p></div>
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
					<h2>Want to See What&rsquo;s Possible Within Your Budget?</h2>
					<p>A great website doesn&rsquo;t have to break the bank. Tell us about your business and your budget, and we&rsquo;ll recommend an approach that gets you a professional, effective website without unnecessary extras &mdash; no pressure, no jargon.</p>
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

<!-- ========== DIY VS PROFESSIONAL ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0 fadeInUp" data-delay="0.1">
				<img src="<?= file_asset('assets/img/development/diy-vs-professional-website.jpg') ?>" alt="DIY website builders vs an affordable professional website" class="img-fluid" style="border-radius:20px;box-shadow:0 18px 40px rgba(10,22,44,.12);" loading="lazy">
			</div>
			<div class="col-lg-6 col-md-12 svc-section fadeInUp" data-delay="0.2">
				<h2 class="svc-section-title">DIY Website Builders vs an Affordable <span>Professional Website</span></h2>
				<p class="svc-section-lead">DIY builders can seem like the cheapest option, but they often cost more in time, frustration, and missed opportunities than a well-priced professional build. Here&rsquo;s how they compare.</p>
				<div class="svc-checks">
					<div class="svc-check"><i class="check-ic bad ri-close-line"></i><div><h4>DIY website builders</h4><p>Low upfront cost, but ongoing subscription fees add up over time. You do all the design, writing, and setup yourself. Templates look generic and are used by many other businesses. <a class="process-link" href="<?= site_url('small-business-seo') ?>">SEO</a> and technical setup are left entirely up to you, and support is usually limited to generic help articles.</p></div></div>
					<div class="svc-check"><i class="check-ic good ri-check-line"></i><div><h4>An affordable professionally built website</h4><p>A one-time (or clearly priced) investment, tailored to your business, with professional design, content guidance, and technical setup handled for you. A site built with SEO foundations from the start, real support from people who understand your business, and a result that reflects the quality of what you actually offer.</p></div></div>
				</div>
				<p>If your time is valuable and you want a result that looks credible from day one, a well-priced professional website is usually the better investment.</p>
			</div>
		</div>
	</div>
</section>

<!-- ========== PROCESS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-compass-line"></i>Our process</h3>
			<h2 class="sec-title">Our Process for Small <span>Business Websites</span></h2>
			<p class="sec-lead">Efficient, transparent, and focused on getting you a great result quickly.</p>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.1">
					<div class="step-circle"><i class="ri-chat-3-line"></i><span class="step-num">1</span></div>
					<h4>A quick, focused discovery chat</h4>
					<p>We ask the right questions about your business and goals without dragging out the process, so we can quote accurately and get started quickly.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.2">
					<div class="step-circle"><i class="ri-pencil-ruler-line"></i><span class="step-num">2</span></div>
					<h4>Efficient, custom design</h4>
					<p>We design your website using proven layouts tailored to your brand, keeping the process efficient without making your site look generic.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.3">
					<div class="step-circle"><i class="ri-quill-pen-line"></i><span class="step-num">3</span></div>
					<h4>Straightforward content and SEO setup</h4>
					<p>We help you pull together clear, simple content and set up the SEO basics so your site is ready to be found.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.4">
					<div class="step-circle"><i class="ri-code-box-line"></i><span class="step-num">4</span></div>
					<h4>Building and testing</h4>
					<p>We build your website and test it across devices and browsers, making sure everything works properly before launch.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.5">
					<div class="step-circle"><i class="ri-rocket-2-line"></i><span class="step-num">5</span></div>
					<h4>Launch and simple handover</h4>
					<p>We launch your site and show you how to make basic updates yourself, so you&rsquo;re not stuck relying on us for every small change.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== FEATURES ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Features Included in an Affordable <span>Small Business Website</span></h2>
			<p class="svc-section-lead">Everything a small business needs to look credible and win customers &mdash; nothing you don&rsquo;t.</p>
			<div class="svc-checks">
				<div class="svc-check"><i class="check-ic good ri-device-line"></i><div><h4>Mobile-responsive design</h4><p>Works on any device.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-form-line"></i><div><h4>Clear contact and enquiry forms</h4><p>Simple paths to get in touch.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-phone-line"></i><div><h4>Click-to-call buttons</h4><p>For mobile visitors.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-map-pin-2-line"></i><div><h4>Google Maps and business hours</h4><p>Find you and know when you&rsquo;re open.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-search-eye-line"></i><div><h4>Basic SEO setup</h4><p>Titles and meta descriptions included <a class="process-link" href="<?= site_url('technical-seo-audits') ?>">in every build</a>.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-edit-line"></i><div><h4>Simple content management</h4><p>Make small updates yourself.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-shield-check-line"></i><div><h4>Secure hosting recommendations</h4><p>Reliable foundations from day one.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-pie-chart-2-line"></i><div><h4>Analytics setup</h4><p>Track visitors from day one.</p></div></div>
			</div>
		</div>
	</div>
</section>

<!-- ========== WHO WE HELP ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Who <span>We Help</span></h2>
			<p class="svc-section-lead">We provide affordable website design for small businesses across Australia, in industries such as:</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-user-smile-line"></i><h4>Sole traders and freelancers</h4><p>Professional, credible sites that make solo businesses look established.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-tools-line"></i><h4>Trades and home services</h4><p>Websites that turn local searches into calls and quotes.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-cup-line"></i><h4>Caf&eacute;s, food trucks, and hospitality</h4><p>Appetising, mobile-first sites that work for hungry locals.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-shopping-bag-3-line"></i><h4>Retail shops and small online stores</h4><p>Storefronts that sell without a huge build budget.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-heart-pulse-line"></i><h4>Health, wellness, and beauty practitioners</h4><p>Warm, reassuring sites that welcome new clients.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-briefcase-line"></i><h4>Consultants and professional services</h4><p>Authority and trust without the big-agency price.</p></div>
				</div>
			</div>
			<p class="svc-section-lead">If you&rsquo;re a small business anywhere in Australia looking for a website that fits your budget, we&rsquo;re happy to help.</p>
		</div>
	</div>
</section>

<!-- ========== WHY CHOOSE US ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Why Choose Us for Affordable Small Business <span>Website Design</span></h2>
			<p class="svc-section-lead">There are countless options for website design in Australia. Here&rsquo;s what sets us apart:</p>
			<div class="svc-symptoms">
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-price-tag-3-line"></i></div>
					<h4>We keep pricing honest</h4>
					<p>No confusing packages, no hidden extras, just a clear quote for what you need.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-focus-3-line"></i></div>
					<h4>We focus on value, not upselling</h4>
					<p>We recommend what your business actually needs, not what earns us the biggest invoice.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-empathize-line"></i></div>
					<h4>We still deliver quality</h4>
					<p>Affordable doesn&rsquo;t mean generic. Every website is designed properly and built to work.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-refresh-line"></i></div>
					<h4>We&rsquo;re here if you need us later</h4>
					<p>Whether that&rsquo;s support, updates, or growing into SEO and marketing down the track.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== PRICING ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Affordable Website Design Pricing <span>and Timeline</span></h2>
			<p>Every business is different, so pricing depends on the number of pages, the features you need, such as ecommerce or booking, and whether you&rsquo;d like help with content or ongoing SEO.</p>
			<p>Simple small business websites are often completed within a few weeks, depending on how quickly content and feedback are provided. You&rsquo;ll get a clear quote upfront with no hidden extras, so you know exactly what you&rsquo;re paying for and why.</p>
			<p>Ready for a clear, itemized quote? <a class="process-link" href="<?= site_url('contact') ?>">Request your free website quote</a> and we&rsquo;ll outline the investment alongside what&rsquo;s included.</p>
		</div>
	</div>
</section>

<!-- ========== FAQ ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-question-answer-line"></i>FAQ</h3>
			<h2 class="sec-title">Affordable Website Design for Small Business Australia <span>FAQs</span></h2>
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