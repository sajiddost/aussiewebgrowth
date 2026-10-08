<?php
// =========================================================
// Real Estate Website Design Australia — service page
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$service = [
    'slug'        => 'real-estate-website-design-australia',
    'title'       => 'Real Estate Website Design Australia',
    'pill'        => 'Real Estate Web Design',
    'metaTitle'   => 'Real Estate Website Design Australia | Win More Listings',
    'metaDesc'    => 'Need real estate website design in Australia? We build fast, SEO-ready agent and agency websites that capture leads and win more listings. Get a free quote.',
    'h1'          => 'Real Estate Website Design Australia: Websites That Win Listings and Generate Leads',
    'lead'        => 'Australian property is a relationship business, but the relationship usually starts online &mdash; and a website that looks dated or loads slowly is losing you appraisals before you get the call. We build fast, mobile-first websites for Australian agents and agencies that showcase listings, capture vendor leads, and win more listings.',
    'image'       => 'assets/img/blog/3.jpg',
    'imageAlt'    => 'Real estate website design Australia - fast, SEO-ready agent and agency websites that win listings',
    'related'     => ['small-business-seo', 'seo-management', 'on-page-seo'],

    'faqs' => [
        ['q' => 'How much does real estate website design cost in Australia?', 'a' => 'Pricing depends on your goals, the size of your site, and the integrations you need, such as CRM or listing feeds. Request a free quote and we&rsquo;ll provide a clear, itemized estimate based on your agency &mdash; no hidden fees, no surprise add-ons.'],
        ['q' => 'How long does it take to build a real estate website?', 'a' => 'Most projects run for several weeks from kickoff to launch. Timelines depend on how quickly content, photography, and approvals are provided, and we&rsquo;ll share a schedule with clear milestones at the start so you always know where the build stands.'],
        ['q' => 'Can you integrate my website with my CRM and listings?', 'a' => 'In most cases, yes. We connect popular real estate CRMs and listing feeds so your properties stay up to date without double entry. Compatibility depends on your provider, so we confirm the details during the discovery phase before we build.'],
        ['q' => 'Will my website show up on Google?', 'a' => 'We build every site with SEO best practices from day one &mdash; clean technical structure, optimised pages, and local optimisation, which is the same <a class="process-link" href="' . site_url('technical-seo-audits') . '">technical SEO</a> work we run for every client. Rankings depend on competition and continued effort over time, and we can support ongoing SEO to help you climb.'],
        ['q' => 'Do I still need the listing portals if I have my own website?', 'a' => 'Portals are a valuable source of buyer traffic, and most agents will keep using them. Your own website complements them by building your brand, capturing direct vendor leads, and giving you a place you fully control &mdash; so you&rsquo;re never renting your entire online presence.'],
        ['q' => 'Can my team update the website ourselves?', 'a' => 'Absolutely. We build on user-friendly platforms so your team can edit text, images, listings, and announcements without technical skills. We&rsquo;re also happy to handle updates and maintenance for you through our <a class="process-link" href="' . site_url('ongoing-website-support') . '">ongoing website support</a>.'],
        ['q' => 'Do you offer SEO and marketing after the website is live?', 'a' => 'Yes. We offer <a class="process-link" href="' . site_url('seo-management') . '">ongoing SEO management</a>, content creation, and website support so your site keeps ranking and converting as your agency grows &mdash; not just on launch day.'],
    ],

    'ctaTitle' => 'Let&rsquo;s Build a Website That Wins Your Next Listing',
    'ctaLead'  => 'Your reputation is built one sale at a time. As your real estate website design Australia partner, we&rsquo;ll create a fast, professional, SEO-ready website that reflects the quality of your service and turns visitors into clients. Limited onboarding spots each month.',
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
				<span class="svc-kicker"><i class="ri-search-eye-line"></i>Listing-focused</span>
				<span class="svc-kicker"><i class="ri-rocket-2-line"></i>SEO-ready</span>
				<span class="svc-kicker"><i class="ri-map-pin-2-line"></i>Australia-wide</span>
			</div>
		</div>
	</div>
</section>

<!-- ========== INTRO ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-intro fadeInUp" data-delay="0.1">
			<p>Australian property is a relationship business, but the relationship usually starts online. Before a vendor calls you for an appraisal, they&rsquo;ve searched your name, browsed your listings, read your reviews, and compared you with the agent down the road. If your website looks dated, loads slowly, or hides your contact details, you&rsquo;ve lost the appointment before it began.</p>
			<p>Our real estate website design Australia service is built to fix that. We create fast, beautiful, mobile-first websites for agents, agencies, and property professionals that showcase your listings, build your personal brand, and turn visitors into vendor and buyer enquiries.</p>
			<p>Whether you&rsquo;re a solo agent building your brand, a boutique agency competing with the big franchises, or a growing group with multiple offices, we design a website that positions you as the local expert &mdash; and we make sure it&rsquo;s built to be found.</p>
			<p><strong>A website built specifically for the Australian real estate market doesn&rsquo;t miss these details. A generic template does.</strong></p>
		</div>
	</div>
</section>

<!-- ========== SERVICE FEATURE IMAGE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="fadeInUp" data-delay="0.1">
			<img src="assets/img/service/real-estate-these.jpg" alt="Real estate website design Australia - custom agent and agency websites designed to win listings" class="img-fluid w-100" style="border-radius:20px;box-shadow:0 18px 40px rgba(10,22,44,.12);" loading="lazy">
		</div>
	</div>
</section>

<!-- ========== WHY SPECIALIST ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Why Real Estate Needs a Specialist <span>Website Design Partner in Australia</span></h2>
			<p class="svc-section-lead">Real estate has its own user journeys, its own content needs, and its own SEO patterns. A generic business template won&rsquo;t cut it &mdash; here&rsquo;s why.</p>
			<div class="svc-symptoms">
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-search-eye-line"></i></div>
					<h4>Buyers and vendors search differently</h4>
					<p>Vendors search &ldquo;what&rsquo;s my home worth&rdquo; and &ldquo;best agent in [suburb].&rdquo; Buyers search suburbs, prices, and open homes. Your site has to answer both jobs at once.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-window-2-line"></i></div>
					<h4>The portals bring traffic, not agency</h4>
					<p>Listing portals deliver buyer traffic, but they surface your competitors on the same page. Your own website is where you control the message, the brand, and the enquiry.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-eye-line"></i></div>
					<h4>Vendors judge your marketing by your own</h4>
					<p>A seller is trusting you with their biggest asset. If your own website looks dated, they&rsquo;ll assume your marketing will too &mdash; however good your results.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-speed-up-line"></i></div>
					<h4>Speed decides the enquiry</h4>
					<p>Property decisions happen on phones, often on the move. A slow, clunky site sends potential vendors and buyers straight to the agent down the road.</p>
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
					<h2>Ready to Win More Listings With Your Website?</h2>
					<p>You don&rsquo;t need a website that just looks good. You need one that brings in appraisals. Book a free website review and we&rsquo;ll walk you through exactly where your current site is losing vendor and buyer enquiries &mdash; no jargon, no pressure.</p>
				</div>
				<div class="col-lg-5 col-md-12 text-lg-right">
					<a href="<?= site_url('contact') ?>" class="btn btn-white mb-2">Get Your Free Website Quote</a>
					<p class="mt-2" style="color:rgba(255,255,255,.75);font-size:14px;"><i class="ri-phone-line"></i> Prefer to talk? Email <a href="mailto:<?= e(CONTACT_EMAIL) ?>" style="color:#fff;"><?= e(CONTACT_EMAIL) ?></a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== CUSTOM DESIGN ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Custom Real Estate Website Design for <span>Australian Agents and Agencies</span></h2>
			<p class="svc-section-lead">Your website is your digital shopfront, open around the clock. These are the pieces we design and build into every agent and agency site.</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-search-line"></i><h4>Property search &amp; listing pages that sell</h4><p>Clean, fast property search with filters for suburb, price, bedrooms, bathrooms, parking, and property type. Each listing page showcases photography, floor plans, video tours, and inspection times &mdash; with one clear way to enquire.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-user-star-line"></i><h4>Agent profiles that build personal brand</h4><p>In real estate, people choose people. Each agent gets a profile highlighting experience, recent sales, testimonials, and specialty suburbs &mdash; so clients find a name to trust, not just a logo.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-smartphone-line"></i><h4>Mobile-first real estate website design</h4><p>Most property browsing now happens on phones. We design for small screens first &mdash; large tap targets, fast-loading images, simple navigation &mdash; then scale up to tablets and desktops.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-palette-line"></i><h4>Branding that sets you apart</h4><p>A website that feels like your agency, not a template. Typography, colour, photography, and layout are tailored to your brand &mdash; luxury and refined, modern and energetic, or warm and community-focused.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-focus-3-line"></i><h4>Vendor lead capture &amp; appraisal tools</h4><p>Listings are won long before the sign goes up. We add appraisal request forms, suburb report downloads, and &ldquo;what&rsquo;s my home worth?&rdquo; pages that capture vendor leads and feed them into your sales process.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-server-line"></i><h4>Fast, secure, always-on performance</h4><p>Property sites are heavy on images. We optimise with lazy loading, responsive image sizes, and reliable hosting so your site loads quickly, stays secure, and copes fine with inspection-day traffic spikes.</p></div>
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
			<h2 class="sec-title">Our Real Estate Website Design <span>Process in Australia</span></h2>
			<p class="sec-lead">A great website shouldn&rsquo;t disrupt your working week. Our process is straightforward, and we handle the heavy lifting.</p>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.1">
					<div class="step-circle"><i class="ri-compass-line"></i><span class="step-num"> 1</span></div>
					<h4>Discovery &amp; strategy</h4>
					<p>We learn about your agency, your target suburbs, your ideal clients, and your competitors &mdash; then map out exactly where you can win.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.2">
					<div class="step-circle"><i class="ri-pencil-ruler-line"></i><span class="step-num"> 2</span></div>
					<h4>Design &amp; layout</h4>
					<p>Custom design tailored to your brand, with clear paths to search, appraisal, and enquiry. You review the design and request changes before we build.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.3">
					<div class="step-circle"><i class="ri-file-text-line"></i><span class="step-num"> 3</span></div>
					<h4>Content &amp; SEO setup</h4>
					<p>Engaging copy for every page, optimised with titles, meta descriptions, schema markup, and internal links &mdash; for both readers and search engines.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.4">
					<div class="step-circle"><i class="ri-code-s-slash-line"></i><span class="step-num"> 4</span></div>
					<h4>Build &amp; integrate</h4>
					<p>We develop your site and connect your CRM, listing feeds, enquiry notifications, and analytics &mdash; all tested on phones, tablets, and desktops.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.5">
					<div class="step-circle"><i class="ri-rocket-2-line"></i><span class="step-num"> 5</span></div>
					<h4>Launch &amp; grow</h4>
					<p>At launch we connect analytics and your Google Business Profile &mdash; then keep improving rankings and conversions as your agency grows.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== SEO BUILT IN ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Real Estate SEO Built Into <span>Every Australian Website</span></h2>
			<p class="svc-section-lead">A beautiful website is no use if nobody can find it. Every site we build ships with a solid SEO foundation &mdash; and we can take it further whenever you&rsquo;re ready.</p>
			<div class="row">
				<div class="col-lg-6 col-md-12 mb-4">
					<div class="feature-card h-100">
						<i class="ri-map-pin-2-line"></i><h4>Local SEO for Australian real estate agents</h4>
						<p>Most of your business comes from specific suburbs and regions. We build suburb and area pages for every location you service, align your site with your Google Business Profile, and add local schema so you show up for &ldquo;real estate agent in [suburb].&rdquo;</p>
						<a class="process-link" href="<?= site_url('small-business-seo') ?>">Local SEO goes further &rarr;</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 mb-4">
					<div class="feature-card h-100">
						<i class="ri-window-2-line"></i><h4>On-page SEO for real estate websites</h4>
						<p>Headings, page titles, meta descriptions, image alt text, and internal links are set up so search engines understand every page &mdash; and so suburb pages target the exact terms your future clients type.</p>
						<a class="process-link" href="<?= site_url('on-page-seo') ?>">See our on-page process &rarr;</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 mb-4">
					<div class="feature-card h-100">
						<i class="ri-file-search-line"></i><h4>Technical SEO foundations</h4>
						<p>Property sites are image-heavy, which can slow them down. We handle image optimisation, clean code, and reliable hosting so your site is fast, secure, and easy for search engines to crawl &mdash; whatever it&rsquo;s built on.</p>
						<a class="process-link" href="<?= site_url('technical-seo-audits') ?>">Explore technical audits &rarr;</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 mb-4">
					<div class="feature-card h-100">
						<i class="ri-quill-pen-line"></i><h4>Content that positions you as the local expert</h4>
						<p>Suburb guides, market updates, selling tips, and recent sales build authority and give vendors and buyers a reason to choose you before they ever pick up the phone. Fresh, honest content also gives you something worth sharing.</p>
						<a class="process-link" href="<?= site_url('seo-process-measurement-and-honesty') ?>">Read how we measure SEO &rarr;</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== FEATURES ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Features That Make Our Real Estate Websites <span>Work Harder</span></h2>
			<p class="svc-section-lead">The difference between a brochure and a lead machine is in the details. Every build includes these features.</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-search-eye-line"></i><h4>Property search with filters</h4><p>Buyers filter by suburb, price, bedrooms, bathrooms, and more &mdash; and land on exactly what they want in seconds, not pages.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-database-2-line"></i><h4>Listing feed integration</h4><p>Stay in sync with your CRM and portals, with your properties always up to date &mdash; no double entry, no missed updates.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-mail-send-line"></i><h4>Appraisal &amp; enquiry forms</h4><p>Leads routed to the right agent the moment a buyer or vendor completes a form &mdash; while the intent is still hot.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-award-line"></i><h4>Sold &amp; recent results galleries</h4><p>Prove your track record with the results you&rsquo;re most proud of, presented the way vendors expect to see them.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-star-line"></i><h4>Testimonials &amp; reviews</h4><p>Client feedback showcased exactly where it changes a decision &mdash; on agent pages, suburb pages, and listing pages.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-calendar-check-line"></i><h4>Open home scheduling</h4><p>Inspection times and open homes with easy calendar links &mdash; bookings clear without a phone call.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-line-chart-line"></i><h4>Lead tracking &amp; analytics</h4><p>Know which of your marketing efforts is actually delivering enquiries &mdash; so you can double down on what works.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-dashboard-2-line"></i><h4>Easy-to-edit content management</h4><p>Your team updates pages, listings, and announcements without technical skills &mdash; no developer ticket required.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<a class="feature-card h-100" href="<?= site_url('ongoing-website-support') ?>" style="display:flex;flex-direction:column;text-decoration:none;background:rgba(228,2,43,.05);border-color:rgba(228,2,43,.25);">
						<i class="ri-heart-pulse-line"></i><h4>And we stick around after launch</h4>
						<p>Websites perform best when they&rsquo;re maintained, updated, and improved &mdash; the way your agency keeps evolving.</p>
						<span class="tier-link" style="color:var(--primary-color);font-weight:700;">Explore ongoing support <i class="ri-arrow-right-s-line"></i></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== WHO IT'S FOR ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Real Estate Website Design for <span>Every Type of Australian Property Business</span></h2>
			<p class="svc-section-lead">We design for the whole market &mdash; whoever you are, the goal is the same: more appraisal requests, more enquiries, more listings.</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-user-star-line"></i><h4>Independent agents</h4><p>Build a personal brand and start winning appraisal requests in your own right, without leaning on a franchise name.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-community-line"></i><h4>Boutique &amp; family-owned agencies</h4><p>Compete with the big franchises on service, local knowledge, and trust &mdash; with a site that looks every bit as polished.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100">
						<i class="ri-building-4-line"></i><h4>Multi-office real estate groups</h4>
						<p>A consistent, scalable presence across every office and region &mdash; that grows with you.</p>
						<a class="process-link" href="<?= site_url('enterprise-seo') ?>">Scale like an enterprise &rarr;</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-key-2-line"></i><h4>Property managers</h4><p>Landlord and tenant resources, maintenance requests, and portfolios that are easy for your team to manage.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-rocket-2-line"></i><h4>Developers &amp; project marketers</h4><p>Launch off-the-plan developments with confidence and capture enquiry early &mdash; with pages designed to convert.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<a class="feature-card h-100" href="<?= site_url('contact') ?>" style="display:flex;flex-direction:column;text-decoration:none;background:rgba(228,2,43,.05);border-color:rgba(228,2,43,.25);">
						<i class="ri-question-line"></i><h4>Not sure which type fits you?</h4>
						<p>Tell us what you do and who you serve &mdash; we&rsquo;ll design the right structure for your business.</p>
						<span class="tier-link" style="color:var(--primary-color);font-weight:700;">Talk to us <i class="ri-arrow-right-s-line"></i></span>
					</a>
				</div>
			</div>
			<p>From Sydney and Melbourne to Brisbane, Perth, Adelaide, the Gold Coast, and regional centres across the country, we build websites that reflect the local market you serve.</p>
		</div>
	</div>
</section>

<!-- ========== WHY CHOOSE US ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Why Choose Us for <span>Real Estate Website Design in Australia</span></h2>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-tools-line"></i><h4>We understand real estate</h4><p>Listings, appraisals, and vendor relationships aren&rsquo;t mysteries to us &mdash; so we don&rsquo;t need you to explain the basics of your market.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-focus-3-line"></i><h4>We design for outcomes</h4><p>A pretty website isn&rsquo;t the goal. More appraisals, more enquiries, and more listings are &mdash; and we build every page toward that.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-map-pin-2-line"></i><h4>Built for the Australian market</h4><p>Local terminology, suburb-based searching, and the way Australian buyers and vendors actually research agents.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-eye-line"></i><h4>Transparent from day one</h4><p>Clear timelines, honest recommendations, and open communication at every step &mdash; no surprises, no vanishing acts.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-price-tag-3-line"></i><h4>Straightforward, itemized pricing</h4><p>You see exactly what the project costs before we start &mdash; no hidden fees, no surprise add-ons, no packages padded with things you don&rsquo;t need.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100">
						<i class="ri-heart-pulse-line"></i><h4>We&rsquo;re here after launch</h4>
						<p>A website performs best when it&rsquo;s maintained and improved. We offer ongoing support and SEO management to keep you ahead of competitors.</p>
						<a class="process-link" href="<?= site_url('ongoing-website-support') ?>">Explore ongoing support &rarr;</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== PRICING & TIMELINE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Real Estate Website <span>Pricing and Timeline</span></h2>
			<p>Every agency brief is different, so we don&rsquo;t publish a one-size-fits-all price. Instead, you get a transparent estimate based on the scope that matters: the number of pages, integrations like CRM or listing feeds, and the level of design and copywriting you want. We agree on that scope with you and put it in writing before development starts.</p>
			<p>Timelines are just as clear. A typical project runs for several weeks from kickoff to launch, and we publish a schedule with milestones up front &mdash; so you always know exactly where your website build stands and what happens next.</p>
			<p>Prefer a fixed idea of budget before you begin? <a class="process-link" href="<?= site_url('contact') ?>">Request your free quote</a> and we&rsquo;ll outline the investment alongside what&rsquo;s included &mdash; no surprises, no padding.</p>
		</div>
	</div>
</section>

<!-- ========== FAQ ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-question-answer-line"></i>FAQ</h3>
			<h2 class="sec-title">Real Estate Website Design <span>Australia FAQs</span></h2>
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
			<p class="sec-lead">A website is the start, not the finish. These are the services it connects with most.</p>
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
					<a href="<?= site_url('contact') ?>" class="btn btn-white mb-2">Request Your Free Quote Today</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php require __DIR__ . '/../includes/footer.php';