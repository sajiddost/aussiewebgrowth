<?php
// =========================================================
// Website Designing Company in Sydney — service page
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$service = [
    'slug'      => 'website-designing-company-in-sydney',
    'title'     => 'Website Designing Company in Sydney',
    'pill'      => 'Sydney Web Design',
    'metaTitle' => 'Website Designing Company in Sydney | Design, Redesign, Support',
    'metaDesc'  => 'A website designing company in Sydney offering new builds, redesigns, support, and maintenance packages. Fast, reliable websites. Get a free quote today.',
    'h1'        => 'Website Designing Company in Sydney: Design, Redesign, and Ongoing Support',
    'lead'      => 'Whether you need a brand-new website, a tired old site brought up to date, or ongoing help to keep things running smoothly, your website is one of the hardest-working parts of your business. It should look professional, load quickly, and never leave you stuck when something needs fixing. We&rsquo;re a website designing company in Sydney that covers the full journey &mdash; new website design, website redesigns, and ongoing website support and maintenance &mdash; all from one local team.',
    'image'     => 'assets/img/development/sydney-city.webp',
    'imageAlt'  => 'Website designing company in Sydney - new builds, redesigns, support and maintenance from one local team',
    'related'   => ['small-business-seo', 'seo-management', 'ongoing-website-support'],

    'faqs' => [
        ['q' => 'How much does website design cost in Sydney?', 'a' => 'Pricing depends on the size of your site, the features you need, and whether you want content writing or SEO included. Request a free quote and we&rsquo;ll give you a clear estimate based on your business &mdash; no hidden extras, no surprise costs.'],
        ['q' => 'Do I need a redesign or a full rebuild?', 'a' => 'It depends on your current website. If the foundations are solid but the design feels dated, a redesign can refresh your site without starting from scratch. If there are deeper technical or structural issues, a rebuild may be the better long-term option. We&rsquo;ll assess your site and give you honest advice.'],
        ['q' => 'What does a website maintenance package include?', 'a' => 'Our maintenance packages typically include software and security updates, backups, uptime monitoring, minor content changes, and priority support. We offer a few tiers depending on how much ongoing help you need.'],
        ['q' => 'Do you offer website support without a maintenance package?', 'a' => 'Yes. We offer one-off support for fixes, updates, and troubleshooting if you&rsquo;d prefer not to commit to an ongoing package.'],
        ['q' => 'Will a redesign affect my Google rankings?', 'a' => 'A well-planned redesign shouldn&rsquo;t hurt your rankings, and can often improve them. We take care to preserve your existing content and URLs where possible to protect the SEO value you&rsquo;ve already built.'],
        ['q' => 'How long does a website redesign take?', 'a' => 'Most redesigns take a few weeks, depending on the scope of changes and how quickly content and feedback are provided. We&rsquo;ll share a schedule at the start so you always know where things stand.'],
        ['q' => 'Can I take over maintenance on a website someone else built?', 'a' => 'In most cases, yes. We can review your existing website and take on support or maintenance without a rebuild &mdash; see our <a class="process-link" href="' . site_url('ongoing-website-support') . '">ongoing website support</a> service.'],
    ],

    'ctaTitle' => 'Let&rsquo;s Build (or Rebuild) a Website That Works for You',
    'ctaLead'  => 'Whether you need a brand-new website, a redesign, or reliable ongoing support, your website should be one less thing to worry about. As your local website designing company in Sydney, we&rsquo;ll design, redesign, and support your website with clear pricing and real local service, so it keeps working for your business long after launch.',
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
				<span class="svc-kicker"><i class="ri-map-pin-2-line"></i>Sydney based</span>
				<span class="svc-kicker"><i class="ri-smartphone-line"></i>Mobile-first</span>
				<span class="svc-kicker"><i class="ri-refresh-line"></i>Design, redesign &amp; support</span>
				<span class="svc-kicker"><i class="ri-zap-line"></i>Fast by default</span>
			</div>
		</div>
	</div>
</section>

<!-- ========== SERVICE FEATURE IMAGE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="fadeInUp" data-delay="0.1">
			<img src="<?= file_asset('assets/img/development/sydney-city.webp') ?>" alt="<?= e($service['imageAlt']) ?>" class="img-fluid w-100" style="border-radius:20px;box-shadow:0 18px 40px rgba(10,22,44,.12);" loading="lazy">
		</div>
	</div>
</section>

<!-- ========== INTRO ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-intro fadeInUp" data-delay="0.1">
			<p>Whether you need a brand-new website, a tired old site brought up to date, or ongoing help to keep things running smoothly, your website is one of the hardest-working parts of your business. It should look professional, load quickly, and never leave you stuck when something needs fixing.</p>
			<p>We&rsquo;re a website designing company in Sydney that covers the full journey: new website design, website redesigns, and ongoing website support and maintenance, all from one local team. No juggling multiple providers, no confusion about who&rsquo;s responsible for what.</p>
			<p>Whether you&rsquo;re starting from scratch or rescuing a website that&rsquo;s let you down, we&rsquo;ll build something that works &mdash; and we&rsquo;ll be there to look after it.</p>
			<p><strong>A website that works as hard as you do &mdash; designed, redesigned, and supported in Sydney.</strong></p>
		</div>
	</div>
</section>

<!-- ========== WHY SYDNEY ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Why Choose a Local Website Designing Company <span>in Sydney</span></h2>
			<p class="svc-section-lead">You could hire a designer anywhere in the world. Here&rsquo;s why working with a website designing company in Sydney makes a real difference:</p>
			<div class="svc-symptoms">
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-map-pin-2-line"></i></div>
					<h4>Local market knowledge</h4>
					<p>We understand how Sydney customers search, from the Inner West to the Northern Beaches, Western Sydney, and the Shire.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-chat-1-line"></i></div>
					<h4>Easier communication</h4>
					<p>Same time zone, and the option to meet in person when it helps.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-shield-check-line"></i></div>
					<h4>Accountability</h4>
					<p>When something needs fixing, you&rsquo;re talking to a real local team, not a support ticket sent overseas.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-empathize-line"></i></div>
					<h4>Understanding of your competition</h4>
					<p>We know what other Sydney businesses in your industry are doing online, and how to help you stand out.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== CUSTOM SERVICES ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Custom Website Design <span>Services</span></h2>
			<p class="svc-section-lead">Every project starts with your business, your brand, and your goals. Here&rsquo;s what we build.</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-palette-line"></i><h4>Custom design that reflects your brand</h4><p>We tailor colours, fonts, photography, and layout to your business, so your website looks like you rather than a generic template shared by dozens of other businesses.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-smartphone-line"></i><h4>Mobile-first website design</h4><p>Most customers search on their phones. We design for small screens first, with clear buttons, readable text, and tap-to-call links, then scale up to tablets and desktops.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-zap-line"></i><h4>Fast-loading, reliable websites</h4><p>A slow website loses visitors and can hurt your Google rankings. We build lean, optimised sites on reliable hosting so your pages load quickly, wherever your customers are.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-shopping-bag-3-line"></i><h4>Ecommerce and booking tools</h4><p>Selling products or taking bookings? We add online stores, appointment scheduling, and enquiry forms so your website works for you around the clock.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-search-eye-line"></i><h4>Local SEO built in from the start</h4><p>A great website only helps if people can find it. Every site we build includes local SEO foundations so it shows up for the Sydney searches that matter.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-service-line"></i><h4>Support and maintenance on tap</h4><p>Your website should never leave you stuck. We offer ongoing support and maintenance packages so there&rsquo;s always a real local team ready to help.</p></div>
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
					<h2>Ready for a Website That Actually Works for You?</h2>
					<p>Your website should be an asset, not a headache. Talk to our Sydney-based team about a new website, a redesign, or ongoing support. We&rsquo;ll review your current website for free and give you honest, practical advice &mdash; no pressure, no jargon.</p>
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

<!-- ========== REDESIGN ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Website Redesign Sydney: <span>Giving Your Old Website New Life</span></h2>
			<p class="svc-section-lead">Not every project starts from scratch. If your website is outdated, slow, or simply not performing, a website redesign can be faster and more cost-effective than you might think, and we handle it carefully to protect the SEO value you&rsquo;ve already built.</p>
			<p>Signs it might be time for a website redesign in Sydney:</p>
			<div class="svc-checks">
				<div class="svc-check"><i class="check-ic warn ri-close-circle-line"></i><div><h4>It looks dated</h4><p>Your site looks old compared to competitors.</p></div></div>
				<div class="svc-check"><i class="check-ic warn ri-close-circle-line"></i><div><h4>It&rsquo;s slow or hard to use</h4><p>It loads slowly or is difficult to use on mobile.</p></div></div>
				<div class="svc-check"><i class="check-ic warn ri-close-circle-line"></i><div><h4>It&rsquo;s hard to manage</h4><p>It&rsquo;s difficult for you to update or manage.</p></div></div>
				<div class="svc-check"><i class="check-ic warn ri-close-circle-line"></i><div><h4>It no longer reflects your business</h4><p>It doesn&rsquo;t reflect how your business has grown or changed.</p></div></div>
				
			</div>
			<p>We&rsquo;ll audit your current site, tell you honestly whether a redesign or a full rebuild makes more sense, and carry across your existing content and URLs where possible, so you don&rsquo;t lose the ground you&rsquo;ve already gained with Google.</p>
		</div>
	</div>
</section>

<!-- ========== WEBSITE SUPPORT ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0 fadeInUp" data-delay="0.1">
				<img src="<?= file_asset('assets/img/development/website-support-sydney.jpg') ?>" alt="Website support Sydney - real local help when you actually need it" class="img-fluid" style="border-radius:20px;box-shadow:0 18px 40px rgba(10,22,44,.12);" loading="lazy">
			</div>
			<div class="col-lg-6 col-md-12 svc-section fadeInUp" data-delay="0.2">
				<h2 class="svc-section-title">Website Support Sydney: <span>Help When You Actually Need It</span></h2>
				<p class="svc-section-lead">A website is never really &ldquo;finished.&rdquo; Things change, content needs updating, and occasionally something breaks at the worst possible time. That&rsquo;s where ongoing website support in Sydney comes in.</p>
				<div class="svc-checks">
					<div class="svc-check"><i class="check-ic good ri-bug-line"></i><div><h4>Fast bug fixes</h4><p>Fixing bugs and broken pages quickly, before they cost you customers.</p></div></div>
					<div class="svc-check"><i class="check-ic good ri-edit-line"></i><div><h4>Content updates</h4><p>From new photos to updated pricing and offers.</p></div></div>
					<div class="svc-check"><i class="check-ic good ri-question-line"></i><div><h4>Answers and guidance</h4><p>Answers about how to use or update your site, plus guidance on improvements like new features or better conversion paths.</p></div></div>
					<div class="svc-check"><i class="check-ic good ri-tools-line"></i><div><h4>Troubleshooting</h4><p>Issues with forms, plugins, or integrations sorted without the runaround.</p></div></div>
				</div>
				<p>You&rsquo;ll have a real local team to call, not a support queue, so problems get sorted quickly and you&rsquo;re never left guessing.</p>
			</div>
		</div>
	</div>
</section>

<!-- ========== MAINTENANCE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Website Maintenance Package Sydney: <span>Keeping Your Site Safe and Up to Date</span></h2>
			<p class="svc-section-lead">Beyond one-off support, many Sydney businesses prefer the peace of mind of an ongoing website maintenance package. Regular upkeep helps prevent problems before they happen, rather than fixing them after the damage is done.</p>
			<p>A typical website maintenance package in Sydney includes:</p>
			<div class="svc-checks">
				<div class="svc-check"><i class="check-ic good ri-shield-check-line"></i><div><h4>Software and security updates</h4><p>Keep your website safe.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-database-2-line"></i><div><h4>Regular backups</h4><p>So your site can be restored quickly if something goes wrong.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-monitor-line"></i><div><h4>Uptime and performance monitoring</h4><p>Catch issues early, before they cost you customers.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-edit-line"></i><div><h4>Minor content updates</h4><p>Text, image, or offer changes.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-headphone-line"></i><div><h4>Priority support</h4><p>Faster response times when you need help.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-line-chart-line"></i><div><h4>Simple reporting</h4><p>So you can see what&rsquo;s been done.</p></div></div>
			</div>
			<p>We offer a few tiers of website maintenance packages, from essential security and backup cover through to more comprehensive plans with regular content updates and SEO support. We&rsquo;ll recommend the right level based on how often your website needs to change and how critical it is to your business.</p>
		</div>
	</div>
</section>

<!-- ========== LOCAL SEO ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Local SEO for <span>Sydney Businesses</span></h2>
			<p class="svc-section-lead">A great website only helps if people can find it. Every website we build includes local SEO foundations, and we can support ongoing SEO as part of your maintenance package. That includes:</p>
			<div class="svc-checks">
				<div class="svc-check"><i class="check-ic good ri-map-pin-2-line"></i><div><h4>Suburb and service pages</h4><p>Targeting the areas you serve across Sydney, from the Inner West to the Northern Beaches and the Shire.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-google-line"></i><div><h4>Google Business Profile optimisation</h4><p>So your website and listing match.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-link"></i><div><h4>Consistent business details</h4><p>Name, address, and phone kept consistent across the web.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-code-s-slash-line"></i><div><h4>Local schema markup</h4><p>Structured data that helps search engines understand your business.</p></div></div>
			</div>
		</div>
	</div>
</section>

<!-- ========== PROCESS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-compass-line"></i>Our process</h3>
			<h2 class="sec-title">Our Process, From Design <span>to Ongoing Support</span></h2>
			<p class="sec-lead">Design, redesign, or support &mdash; here&rsquo;s how we work with you from start to finish.</p>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.1">
					<div class="step-circle"><i class="ri-search-line"></i><span class="step-num">1</span></div>
					<h4>Discovery and planning</h4>
					<p>We learn about your business, your customers, and your goals, whether you need a new site, a redesign, or ongoing support.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.2">
					<div class="step-circle"><i class="ri-search-eye-line"></i><span class="step-num">2</span></div>
					<h4>Design or audit</h4>
					<p>For new builds, we create a custom design for your review. For redesigns, we audit your current site and recommend the best path forward.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.3">
					<div class="step-circle"><i class="ri-code-box-line"></i><span class="step-num">3</span></div>
					<h4>Development</h4>
					<p>We build or rebuild your website, testing thoroughly across devices, browsers, and for speed before launch.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.4">
					<div class="step-circle"><i class="ri-rocket-2-line"></i><span class="step-num">4</span></div>
					<h4>Launch</h4>
					<p>We take your website live, connect your analytics and Google Business Profile, and make sure everything is working as it should.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.5">
					<div class="step-circle"><i class="ri-headphone-line"></i><span class="step-num">5</span></div>
					<h4>Ongoing support and maintenance</h4>
					<p>After launch, we&rsquo;re here for website support and maintenance packages, so your website stays fast, secure, and up to date long after we hand it over.</p>
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
			<p class="svc-section-lead">As a website designing company in Sydney, we work with businesses across a wide range of industries, including:</p>
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
					<div class="feature-card h-100"><i class="ri-shopping-bag-3-line"></i><h4>Retail and ecommerce stores</h4><p>High-street stores and online shops built to convert browsers into buyers.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-heart-pulse-line"></i><h4>Health, wellness and beauty</h4><p>Clinics and studios that fill appointment books and build client loyalty.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-building-2-line"></i><h4>Real estate and property</h4><p>Agents and agencies that turn website visitors into appraisals and listings. <a class="process-link" href="<?= site_url('real-estate-website-design-australia') ?>">Real estate web design &rarr;</a></p></div>
				</div>
			</div>
			<p class="svc-section-lead">From the CBD and Inner West to Western Sydney, the Northern Beaches, and the Shire, we design and support websites that reflect your local market.</p>
		</div>
	</div>
</section>

<!-- ========== WHY CHOOSE US ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Why Choose Our Website Designing Company <span>in Sydney</span></h2>
			<p class="svc-section-lead">There&rsquo;s no shortage of options for website design in Sydney. Here&rsquo;s what sets us apart:</p>
			<div class="svc-symptoms">
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-route-line"></i></div>
					<h4>We cover the whole journey</h4>
					<p>Design, redesign, support, and maintenance, all from one local team.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-money-dollar-circle-line"></i></div>
					<h4>We&rsquo;re transparent</h4>
					<p>Clear pricing, honest advice, and realistic timelines, with no hidden costs.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-chat-1-line"></i></div>
					<h4>We&rsquo;re responsive</h4>
					<p>Real local support when you need help, not a ticket sent overseas.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-refresh-line"></i></div>
					<h4>We&rsquo;re in it for the long term</h4>
					<p>Your website should keep improving, and our maintenance packages help make sure it does.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== PRICING ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Pricing for Design, <span>Redesign, and Maintenance</span></h2>
			<p>Every business is different, so we tailor pricing to your needs. New website design and redesign costs depend on the number of pages, features, and content requirements. Website maintenance packages are priced in simple tiers based on the level of cover and support you need.</p>
			<p>We&rsquo;ll give you a clear, upfront quote with no hidden extras, so you know exactly what you&rsquo;re paying for.</p>
			<p>Ready for a clear, itemized quote? <a class="process-link" href="<?= site_url('contact') ?>">Request your free website quote</a> and we&rsquo;ll outline the investment alongside what&rsquo;s included.</p>
		</div>
	</div>
</section>

<!-- ========== FAQ ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-question-answer-line"></i>FAQ</h3>
			<h2 class="sec-title">Website Designing Company in Sydney <span>FAQs</span></h2>
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