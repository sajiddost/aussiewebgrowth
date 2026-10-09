<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/functions.php';

$pageTitle       = 'Web Development Services in Australia';
$pageDescription = 'Professional web development services in Australia — custom websites for small businesses, WordPress builds, ecommerce, redesigns, and ongoing website support. Fast, mobile-first, SEO-ready websites across Sydney, Melbourne, Brisbane, Perth, Adelaide and beyond.';
$active          = '';

// FAQ content doubles as FAQPage structured data for answer engines (AEO).
$faqs = [
    ['q' => 'How much does a small business website cost in Australia?', 'a' => 'It depends on the number of pages and features you need. A simple small business website costs far less than a large ecommerce build. Request a free quote and we\'ll give you a clear, itemised estimate with no hidden extras.'],
    ['q' => 'How long does it take to build a website?', 'a' => 'Most small business websites go live within a few weeks. Larger or more complex builds take longer, and the timeline also depends on how quickly content and feedback are provided. You\'ll get a clear schedule before work starts.'],
    ['q' => 'Do you build websites for businesses outside major cities?', 'a' => 'Yes. We work with businesses right across Australia — Sydney, Melbourne, Brisbane, Perth, Adelaide, regional towns and everywhere in between. The whole process runs online, and communication happens on your schedule.'],
    ['q' => 'Will my website work on mobile phones?', 'a' => 'Every website we build is mobile-first. It\'s designed and tested on phones first, then scaled up to tablets and desktops, because most of your visitors will arrive on a phone.'],
    ['q' => 'Do you build ecommerce websites and online stores?', 'a' => 'Yes. We build online stores with secure payments, product management, shipping setup, and the integrations your business needs — scoped to what you actually sell.'],
    ['q' => 'Do you provide website support after launch?', 'a' => 'Yes. We offer ongoing website support and maintenance — updates, backups, security, small changes, and hosting help — so your site stays fast and current after launch.'],
    ['q' => 'Can you redesign my existing website?', 'a' => 'Yes. If your current site looks dated, loads slowly, or isn\'t converting, we can redesign it while preserving what already works — your rankings, your content, and your brand.'],
    ['q' => 'Is SEO included with the website?', 'a' => 'Every website we build includes SEO foundations: clean code, fast load times, proper headings, schema, and optimised metadata. Ongoing SEO can be added after launch if you want to grow your rankings further.'],
];

$faqJson = json_encode([
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => array_map(function ($f) {
        return [
            '@type'          => 'Question',
            'name'           => $f['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
        ];
    }, $faqs),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

$extraSchema = '<script type="application/ld+json">' . $faqJson . '</script>';

require __DIR__ . '/includes/header.php';
?>

<!-- ========== HERO (text left / image right) ========== -->
<section id="home" class="hero wd-hero section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12 fadeInUp" data-delay="0.1">
				<h3 class="pill"><i class="ri-code-s-slash-line"></i>Web Development &bull; Australia-wide</h3>
				<h1>Web Development Services in <span>Australia</span></h1>
				<p class="hero-lead">Fast, mobile-first, SEO-ready websites built for Australian businesses &mdash; designed to load quickly, look professional, and turn visitors into customers.</p>
				<div>
					<a href="<?= site_url('contact') ?>" class="btn btn-primary">Get a Free Website Quote <i class="ri-rocket-line"></i></a>
					<a href="#services" class="btn btn-dark">Explore Services</a>
				</div>
				<div class="hero-badges">
					<span><i class="ri-smartphone-line"></i>Mobile-first builds</span>
					<span><i class="ri-search-eye-line"></i>SEO foundations built in</span>
					<span><i class="ri-map-pin-line"></i>Proudly Australian</span>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 fadeInUp" data-delay="0.25">
				<div class="wd-hero-media">
					<img src="<?= site_url('assets/img/web-development-services-in-australia-hero.webp') ?>" alt="Web development services in Australia" loading="eager">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== END HERO ========== -->

<!-- ========== PARTNER LOGOS ========== -->
<section class="partner-strip">
	<div class="container">
		<p class="partner-label fadeInUp" data-delay="0.1">Trusted by businesses and teams across Australia</p>
		<div class="partner-logos fadeInUp" data-delay="0.2">
			<img src="<?= site_url('assets/img/brands/1.svg') ?>" alt="Partner logo" loading="lazy">
			<img src="<?= site_url('assets/img/brands/2.svg') ?>" alt="Partner logo" loading="lazy">
			<img src="<?= site_url('assets/img/brands/3.svg') ?>" alt="Partner logo" loading="lazy">
			<img src="<?= site_url('assets/img/brands/4.svg') ?>" alt="Partner logo" loading="lazy">
			<img src="<?= site_url('assets/img/brands/5.svg') ?>" alt="Partner logo" loading="lazy">
		</div>
	</div>
</section>
<!-- ========== END PARTNER LOGOS ========== -->

<!-- ========== STATS ========== -->
<section class="section pt-0 pb-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
				<div class="stat-box fadeInUp" data-delay="0.1">
					<h4>1&ndash;2 wks</h4>
					<p>Typical launch time for a small business website, content permitting</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
				<div class="stat-box fadeInUp" data-delay="0.2">
					<h4>24 hrs</h4>
					<p>Response time on every project &mdash; no &ldquo;we&rsquo;ll get back to you&rdquo;</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
				<div class="stat-box fadeInUp" data-delay="0.3">
					<h4>100%</h4>
					<p>Mobile-first, hand-built websites &mdash; no bloated page-builder templates</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
				<div class="stat-box fadeInUp" data-delay="0.4">
					<h4>1 quote</h4>
					<p>Fixed, itemised pricing up front &mdash; no surprises after the build starts</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== END STATS ========== -->

<!-- ========== THE PROCESS ========== -->
<section id="how" class="section">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-refresh-line"></i>How We Work</h3>
			<h2 class="sec-title">A Repeatable Build Process, <span>Not a Black Box</span></h2>
			<p class="sec-lead">Discovery, Design, Build, Launch &mdash; run as a process with clear milestones. Most website projects don&rsquo;t go wrong from a lack of talent. They go wrong from a lack of structure. We fix that.</p>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.1">
					<div class="step-circle"><i class="ri-search-eye-line"></i><span class="step-num">1</span></div>
					<h4>Discovery</h4>
					<p>We learn your business, your customers, and what the website actually needs to achieve before anyone opens a design tool.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.2">
					<div class="step-circle"><i class="ri-pencil-ruler-line"></i><span class="step-num">2</span></div>
					<h4>Design</h4>
					<p>You see the layout and look of every page before we build. You review it, request changes, and only then does development start.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.3">
					<div class="step-circle"><i class="ri-code-s-slash-line"></i><span class="step-num">3</span></div>
					<h4>Build</h4>
					<p>Clean, fast, mobile-first code with SEO foundations, schema, and optimised images &mdash; tested across real phones and browsers.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.4">
					<div class="step-circle"><i class="ri-rocket-2-line"></i><span class="step-num">4</span></div>
					<h4>Launch &amp; Support</h4>
					<p>We deploy, test, and hand over training &mdash; then stay available for updates, maintenance, and the next thing your site needs.</p>
				</div>
			</div>
		</div>
		<p class="sec-lead text-center fadeInUp" data-delay="0.2">Want the details? <a class="process-link" href="<?= site_url('contact') ?>">Ask us to walk you through the process</a> &mdash; or start with a free quote on your project.</p>
	</div>
</section>
<!-- ========== END PROCESS ========== -->

<!-- ========== OUR RECENT PROJECTS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-projects-line"></i>Our Recent Projects</h3>
			<h2 class="sec-title">Recent Websites <span>We&rsquo;ve Built</span></h2>
			<p class="sec-lead">A selection of recent web development work for Australian businesses &mdash; each one designed mobile-first, built for speed, and shipped with SEO foundations.</p>
		</div>
		<div class="row">
			<?php
			$recentProjects = [
				['img' => 'assets/img/portfolio/hogbuilders.webp', 'title' => 'Hog Builders website project'],
				['img' => 'assets/img/portfolio/osp-scholars.webp', 'title' => 'OSP Scholars website project'],
			];
			foreach ($recentProjects as $i => $p): ?>
			<div class="col-lg-6 col-md-6 col-sm-12 mb-4">
				<div class="project-card fadeInUp" data-delay="<?= 0.1 + $i * 0.1 ?>">
					<div class="project-thumb">
						<img src="<?= site_url($p['img']) ?>" alt="<?= e($p['title']) ?> - web development project in Australia" loading="lazy">
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!-- ========== END OUR RECENT PROJECTS ========== -->


<!-- ========== A WEBSITE THAT LOOKS GOOD ISN'T ENOUGH ========== -->
<section class="section wd-enough">
	<div class="container">
		<div class="sec-header fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-sparkling-2-line"></i>Design &bull; Speed &bull; Search</h3>
			<h2 class="sec-title">A Website That <span>Looks Good</span> Isn&rsquo;t Enough</h2>
			<p class="sec-lead">Your website is usually the first thing a customer sees of your business, and it&rsquo;s being judged in seconds &mdash; on a phone, often on a slow connection. It has to load fast, make what you do obvious, and make the next step easy. That&rsquo;s the standard we build to.</p>
		</div>
		<div class="row fadeInUp" data-delay="0.15">
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="seo-feature-item">
					<div class="seo-icon"><i class="ri-pencil-ruler-line"></i></div>
					<div>
						<h3>Design Around Your Customer</h3>
						<p>Every page starts from the question a visitor actually arrived with. Structure, copy hierarchy, and calls to action are arranged so people find their answer quickly and know exactly what to do next &mdash; rather than wandering through a portfolio piece.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="seo-feature-item">
					<div class="seo-icon"><i class="ri-speed-line"></i></div>
					<div>
						<h3>Speed Built In, Not Bolted On</h3>
						<p>Page speed affects whether visitors stay, whether Google ranks you, and how many enquiries you get. We build with clean code, optimised images, and lightweight pages from the start &mdash; not as a fix-up after the site is already slow.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 mb-4">
				<div class="seo-feature-item">
					<div class="seo-icon"><i class="ri-search-eye-line"></i></div>
					<div>
						<h3>SEO Foundations from Day One</h3>
						<p>Every build ships with proper headings, schema markup, fast load times, and optimised metadata, so your site can be indexed and understood by search engines and AI systems from launch &mdash; and give you something to grow rankings on later.</p>
					</div>
				</div>
			</div>
		</div>
		<p class="wd-enough-note fadeInUp" data-delay="0.25">None of this replaces good content. A beautiful site with nothing useful on it won&rsquo;t rank, and it won&rsquo;t convert. The build and the message have to work together &mdash; which is why we ask about your customers before we ask about your colour palette.</p>
	</div>
</section>
<!-- ========== END WHY A PROFESSIONAL WEBSITE MATTERS ========== -->

<!-- ========== WEBSITES FOR SMALL BUSINESSES (split) ========== -->
<section class="section">
	<div class="container">
		<div class="row hs-split">
			<div class="col-lg-6 col-md-12 fadeInUp" data-delay="0.1">
				<div class="hs-split-text">
					<p class="pill"><i class="ri-store-2-line"></i>Our Core Focus</p>
					<h2>Websites for <span>Small Businesses</span></h2>
					<p>A small business website has one job: help the right people find you, trust you, and contact you. It doesn&rsquo;t need fifty pages or a fancy animation. It needs clear messaging, fast load times, and an obvious next step &mdash; on any device.</p>
					<p>We build affordable, professional websites for Australian small businesses: cafés and restaurants, trades and contractors, clinics and health practices, professional services, and local retailers. Every build includes the essentials, without paying for features you&rsquo;ll never use.</p>
					<a href="<?= site_url('affordable-website-design-small-business-australia') ?>" class="btn btn-primary">See Small Business Websites</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 fadeInUp order-first order-lg-last mb-4 mb-lg-0" data-delay="0.3">
				<img src="<?= site_url('assets/img/Websites-for-Small-Businesses.webp') ?>" class="img-fluid rounded" alt="Websites for small businesses in Australia" loading="lazy" />
			</div>
		</div>
	</div>
</section>
<!-- ========== END SMALL BUSINESS WEBSITES ========== -->

<!-- ========== WHO THIS IS FOR ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-user-heart-line"></i>Who This Is For</h3>
			<h2 class="sec-title">Different Businesses. <span>Different Websites.</span></h2>
			<p class="sec-lead">None of these situations call for the same build, which is one reason we&rsquo;re cautious about agencies that quote identical packages regardless of the business.</p>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.1">
					<div class="industry-icon"><i class="ri-rocket-2-line"></i></div>
					<h4>New Businesses</h4>
					<p>If you&rsquo;re just starting out, you need a credible first website &mdash; the right pages, a clear offer, and something you can get live quickly without overbuilding.</p>
					<a href="<?= site_url('contact') ?>" class="industry-link">Launch your first site <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.2">
					<div class="industry-icon"><i class="ri-refresh-line"></i></div>
					<h4>Redesigns</h4>
					<p>If your current site looks dated, loads slowly, or embarrasses you when you send the link, the priority is a rebuild that keeps what already works.</p>
					<a href="<?= site_url('contact') ?>" class="industry-link">Redesign your site <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.3">
					<div class="industry-icon"><i class="ri-shopping-cart-2-line"></i></div>
					<h4>Selling Online</h4>
					<p>If you&rsquo;re ready to sell online, the priority shifts to product structure, secure payments, shipping logic, and a checkout that doesn&rsquo;t lose people.</p>
					<a href="<?= site_url('contact') ?>" class="industry-link">Plan your store <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.4">
					<div class="industry-icon"><i class="ri-tools-line"></i></div>
					<h4>Existing Sites Needing Care</h4>
					<p>If your site is live but neglected &mdash; no updates, no backups, small issues piling up &mdash; the priority is support that keeps it fast and secure.</p>
					<a href="<?= site_url('ongoing-website-support') ?>" class="industry-link">Get website support <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
		</div>
		<p class="sec-lead text-center mt-4 fadeInUp" data-delay="0.3">Not sure which one you are? <a class="process-link" href="<?= site_url('contact') ?>">Tell us about your project</a> and we&rsquo;ll point you in the right direction.</p>
	</div>
</section>
<!-- ========== END WHO THIS IS FOR ========== -->

<!-- ========== FULL-WIDTH IMAGE BANNER ========== -->
<section class="wd-fullimg-section">
	<img src="<?= site_url('assets/img/australian-flag.jpg') ?>" alt="Web development services across Australia - Australian flag" loading="lazy">
</section>
<!-- ========== END FULL-WIDTH IMAGE BANNER ========== -->

<!-- ========== PRICING ========== -->
<section id="pricing" class="section">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-price-tag-3-line"></i>Pricing</h3>
			<h2 class="sec-title">Three Ways to <span>Work With Us</span></h2>
			<p class="sec-lead">Projects follow the scope, not a template. These are the three shapes work usually takes &mdash; every quote starts from a free discussion about what you need.</p>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="pricing-card fadeInUp" data-delay="0.1">
					<h4>Small Business Website</h4>
					<div class="pricing-price">$699<span class="pricing-cadence">from &middot; one-off</span></div>
					<p class="pricing-desc">A professional, mobile-first website for your small business &mdash; the right pages, clear messaging, and SEO foundations, at a fixed price.</p>
					<ul class="pricing-features">
						<li><i class="ri-check-line"></i>Up to 5 pages, custom design</li>
						<li><i class="ri-check-line"></i>Mobile-first, fast-loading build</li>
						<li><i class="ri-check-line"></i>Contact form &amp; Google Maps setup</li>
						<li><i class="ri-check-line"></i>SEO foundations &amp; schema included</li>
						<li><i class="ri-check-line"></i>Launch training &amp; handover</li>
					</ul>
					<a href="<?= site_url('contact') ?>" class="btn btn-dark">Get Your Quote</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="pricing-card is-featured fadeInUp" data-delay="0.2">
					<span class="pricing-badge">Most Popular</span>
					<h4>Website + Support</h4>
					<div class="pricing-price">$1,299<span class="pricing-cadence">from &middot; one-off</span></div>
					<p class="pricing-desc">A new build or redesign, plus ongoing support to keep it updated, secure, and improving after launch.</p>
					<ul class="pricing-features">
						<li><i class="ri-check-line"></i>Everything in the small business build</li>
						<li><i class="ri-check-line"></i>Up to 10 pages or a full redesign</li>
						<li><i class="ri-check-line"></i>Monthly updates, backups &amp; security</li>
						<li><i class="ri-check-line"></i>Small changes handled as they come up</li>
						<li><i class="ri-check-line"></i>Priority responses within 24 hours</li>
						<li><i class="ri-check-line"></i>Optional SEO add-on for growth</li>
					</ul>
					<a href="<?= site_url('contact') ?>" class="btn btn-primary">Discuss Your Project</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="pricing-card fadeInUp" data-delay="0.3">
					<h4>Ecommerce &amp; Custom Builds</h4>
					<div class="pricing-price">$1,999<span class="pricing-cadence">from &middot; one-off</span></div>
					<p class="pricing-desc">Online stores, booking systems, integrations, and larger multi-page builds &mdash; planned, staged, and quoted to the work.</p>
					<ul class="pricing-features">
						<li><i class="ri-check-line"></i>Store setup with secure payments</li>
						<li><i class="ri-check-line"></i>Product, shipping &amp; tax configuration</li>
						<li><i class="ri-check-line"></i>Up to 50 products loaded for you</li>
						<li><i class="ri-check-line"></i>Third-party integrations as needed</li>
						<li><i class="ri-check-line"></i>Staged delivery with milestone reviews</li>
					</ul>
					<a href="<?= site_url('contact') ?>" class="btn btn-dark">Discuss Scope</a>
				</div>
			</div>
		</div>
		<p class="text-center pricing-note fadeInUp" data-delay="0.2">Every quote is itemised and fixed before work begins. Start with a <a href="<?= site_url('contact') ?>">free website quote</a> and we&rsquo;ll outline the scope your project actually needs.</p>
	</div>
</section>
<!-- ========== END PRICING ========== -->

<!-- ========== REVIEWS ========== -->
<section id="reviews" class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-star-smile-line"></i>Reviews</h3>
			<h2 class="sec-title">What Our Clients <span>Say About Us</span></h2>
			<p class="sec-lead">Feedback from Australian businesses we&rsquo;ve designed, built, and supported websites for.</p>
		</div>
		<div class="reviews-carousel fadeInUp" data-delay="0.2">
			<button class="reviews-nav reviews-prev" type="button" aria-label="Previous reviews"><i class="ri-arrow-left-s-line"></i></button>
			<div class="reviews-viewport">
				<div class="reviews-track">
					<?php
					$reviews = [
						['text' => 'Our old site was slow and embarrassing on mobile. The new one launched in three weeks, looks sharp, and we&rsquo;re getting proper enquiries now instead of silence. Communication was clear the whole way through.', 'name' => 'Sarah Mitchell', 'role' => 'Owner, Mitchell Dental Studio', 'loc' => 'Sydney, NSW'],
						['text' => 'Fixed quote, clear timeline, no surprises. As a small business that matters more than any fancy feature. The site loads fast, ranks for our main services, and the training session meant we can update it ourselves.', 'name' => 'Daniel Okafor', 'role' => 'Director, Okafor Plumbing', 'loc' => 'Melbourne, VIC'],
						['text' => 'We&rsquo;ve been through two agencies before this. First time a web project has actually delivered what was promised, on the date that was promised. Support after launch has been just as good.', 'name' => 'Rachel Nguyen', 'role' => 'Marketing Manager, BrightPath B2B', 'loc' => 'Brisbane, QLD'],
						['text' => 'They rebuilt our ecommerce site without a single day of downtime. Products migrated cleanly, checkout is faster, and sales went up in the first month. Straight answers and honest timelines throughout.', 'name' => 'Tom Edwards', 'role' => 'Co-founder, Ridgeline Supply', 'loc' => 'Perth, WA'],
						['text' => 'We needed a site that could handle bookings and look credible against the big franchises. Delivered on both. The whole process ran online and every question was answered within a day.', 'name' => 'Priya Sharma', 'role' => 'Practice Manager, Clearview Dental', 'loc' => 'Adelaide, SA'],
					];
					foreach ($reviews as $i => $r):
						$initials = implode('', array_map(function ($w) { return $w[0]; }, explode(' ', $r['name'])));
					?>
					<div class="review-slide">
						<div class="review-card">
							<div class="review-stars" aria-label="5 out of 5 stars">
								<i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
							</div>
							<p class="review-text"><?= $r['text'] ?></p>
							<div class="review-author">
								<span class="review-avatar-initials" aria-hidden="true"><?= e($initials) ?></span>
								<div>
									<p class="review-name"><?= e($r['name']) ?></p>
									<p class="review-role"><?= $r['role'] ?> &bull; <?= $r['loc'] ?></p>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			<button class="reviews-nav reviews-next" type="button" aria-label="Next reviews"><i class="ri-arrow-right-s-line"></i></button>
		</div>
		<div class="reviews-dots" role="tablist" aria-label="Review slides"></div>
	</div>
</section>
<!-- ========== END REVIEWS ========== -->

<script>
(function () {
	var carousel = document.querySelector('.reviews-carousel');
	if (!carousel) return;
	var track = carousel.querySelector('.reviews-track');
	var slides = track.querySelectorAll('.review-slide');
	var prev = carousel.querySelector('.reviews-prev');
	var next = carousel.querySelector('.reviews-next');
	var dotsWrap = document.querySelector('.reviews-dots');
	var index = 0;

	function perView() {
		if (window.innerWidth < 768) return 1;
		if (window.innerWidth < 992) return 2;
		return 3;
	}
	function maxIndex() { return Math.max(0, slides.length - perView()); }
	function step() {
		var gap = parseFloat(getComputedStyle(track).gap) || 0;
		return slides[0].getBoundingClientRect().width + gap;
	}

	function buildDots() {
		dotsWrap.innerHTML = '';
		for (var i = 0; i <= maxIndex(); i++) {
			var b = document.createElement('button');
			b.type = 'button';
			b.className = 'reviews-dot' + (i === index ? ' is-active' : '');
			b.setAttribute('aria-label', 'Go to review ' + (i + 1));
			(function (n) { b.addEventListener('click', function () { goTo(n); }); })(i);
			dotsWrap.appendChild(b);
		}
	}
	function update() {
		track.style.transform = 'translateX(' + (-index * step()) + 'px)';
		var dots = dotsWrap.querySelectorAll('.reviews-dot');
		dots.forEach(function (d, i) { d.classList.toggle('is-active', i === index); });
		prev.disabled = index === 0;
		next.disabled = index >= maxIndex();
	}
	function goTo(n) { index = Math.max(0, Math.min(n, maxIndex())); update(); }

	prev.addEventListener('click', function () { goTo(index - 1); });
	next.addEventListener('click', function () { goTo(index + 1); });

	window.addEventListener('resize', function () {
		if (index > maxIndex()) index = maxIndex();
		buildDots(); update();
	});

	buildDots(); update();
})();
</script>

<!-- ========== FAQ ========== -->
<section id="faqs" class="section">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-question-answer-line"></i>FAQ</h3>
			<h2 class="sec-title">Frequently Asked <span>Questions</span></h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-12 mb-4">
				<div class="faq-wrap fadeInUp" data-delay="0.2">
					<i class="ri-chat-question-line"></i>
					<h2>Still have a question? Let&rsquo;s talk.</h2>
					<a href="<?= site_url('contact') ?>" class="btn btn-primary mb-2">Get a free quote</a>
					<p>Prefer to email? <a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= e(CONTACT_EMAIL) ?></a></p>
				</div>
			</div>
			<div class="col-lg-8 col-md-12 mb-4">
				<div class="accordion-holder fadeInUp" data-delay="0.3">
					<?php foreach ($faqs as $i => $faq) {
						$open = $i === 0 ? 'true' : 'false';
						?>
						<div class="accordion-item" data-open="<?= $open ?>">
							<h3 class="accordion-header"><?= e($faq['q']) ?><span></span></h3>
							<div class="accordion-body"><p><?= e($faq['a']) ?></p></div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== END FAQ ========== -->

<?php require __DIR__ . '/includes/footer.php'; ?>
