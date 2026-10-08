<?php
// =========================================================
// Website Design for Dentists Australia — service page
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$service = [
    'slug'      => 'website-design-for-dentists-australia',
    'title'     => 'Website Design for Dentists Australia',
    'pill'      => 'Dental Web Design',
    'metaTitle' => 'Website Design for Dentists Australia | Fill Your Chairs',
    'metaDesc'  => 'Website design for dentists in Australia that builds trust and books more new patients. Fast, mobile-friendly, SEO-ready dental websites. Free quote.',
    'h1'        => 'Website Design for Dentists Australia: Websites That Fill Your Appointment Book',
    'lead'      => 'A toothache doesn&rsquo;t wait for a referral. Neither does a parent searching for a family dentist, or someone finally ready to fix the smile they&rsquo;ve been putting off. In all of these moments, the first thing they do is search online, and your website is often the deciding factor in whether they call your practice or the one down the road. We specialise in website design for dentists in Australia, building fast, professional, trust-building websites that turn visitors into booked appointments.',
    'image'     => 'assets/img/development/dental-website-design-australia.jpg',
    'imageAlt'  => 'Website design for dentists in Australia - fast, professional websites that book more new patients',
    'related'   => ['small-business-seo', 'seo-management', 'ongoing-website-support'],

    'faqs' => [
        ['q' => 'How much does website design cost for a dental practice?', 'a' => 'Pricing depends on the number of pages, treatment pages, booking integration, and whether you want content writing or SEO included. Request a free quote and we&rsquo;ll give you a clear estimate based on your practice &mdash; no hidden extras, no surprise costs.'],
        ['q' => 'Can you integrate our booking system into the new website?', 'a' => 'In most cases, yes. We can connect popular dental booking and practice management systems so patients can request appointments online. Compatibility depends on your provider, so we&rsquo;ll confirm this during discovery.'],
        ['q' => 'Will the website meet AHPRA advertising requirements?', 'a' => 'We design with AHPRA&rsquo;s advertising guidelines in mind, particularly around testimonials and treatment claims. This supports your compliance efforts, but the practice remains responsible for ensuring its advertising meets all regulatory requirements.'],
        ['q' => 'How long does it take to build a dental website?', 'a' => 'Most dental websites take several weeks from kickoff to launch, depending on how quickly content, photos, and approvals are provided. We&rsquo;ll share a schedule at the start so you always know where things stand.'],
        ['q' => 'Will my website show up on Google?', 'a' => 'We build every site with SEO best practices and local optimisation from day one. Rankings depend on competition and ongoing effort, and we offer SEO support to help you climb further &mdash; see our <a class="process-link" href="' . site_url('small-business-seo') . '">small business SEO</a> service.'],
        ['q' => 'Can I update the website myself?', 'a' => 'Absolutely. We build on user-friendly platforms so your team can update hours, offers, and announcements. We&rsquo;re also happy to handle updates for you through our <a class="process-link" href="' . site_url('ongoing-website-support') . '">ongoing website support</a>.'],
        ['q' => 'Do you work with multi-location dental groups?', 'a' => 'Yes. We design scalable websites for multi-location practices, with individual location pages so each clinic can be found by nearby patients.'],
    ],

    'ctaTitle' => 'Let&rsquo;s Build a Website That Brings in New Patients',
    'ctaLead'  => 'Your practice has built its reputation one patient at a time. Your website should help more people find you, trust you, and book their first appointment. As your dedicated partner for website design for dentists in Australia, we&rsquo;ll create a fast, professional, SEO-ready website that reflects the quality of your care and turns visitors into patients.',
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
				<span class="svc-kicker"><i class="ri-empathize-line"></i>Patient-focused</span>
				<span class="svc-kicker"><i class="ri-smartphone-line"></i>Mobile-first</span>
				<span class="svc-kicker"><i class="ri-search-eye-line"></i>Local SEO built in</span>
				<span class="svc-kicker"><i class="ri-calendar-check-line"></i>Booking built in</span>
			</div>
		</div>
	</div>
</section>

<!-- ========== SERVICE FEATURE IMAGE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="fadeInUp" data-delay="0.1">
			<img src="<?= file_asset('assets/img/development/dental-website-design-australia.jpg') ?>" alt="<?= e($service['imageAlt']) ?>" class="img-fluid w-100" style="border-radius:20px;box-shadow:0 18px 40px rgba(10,22,44,.12);" loading="lazy">
		</div>
	</div>
</section>

<!-- ========== INTRO ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-intro fadeInUp" data-delay="0.1">
			<p>A toothache doesn&rsquo;t wait for a referral. Neither does a parent searching for a family dentist, or someone finally ready to fix the smile they&rsquo;ve been putting off. In all of these moments, the first thing they do is search online, and your website is often the deciding factor in whether they call your practice or the one down the road.</p>
			<p>We specialise in website design for dentists in Australia, building fast, professional, trust-building websites that turn visitors into booked appointments. Your clinical skills earn loyal patients. Your website needs to earn their first visit.</p>
			<p>Whether you run a single-chair practice, a growing multi-dentist clinic, or a specialist practice, we&rsquo;ll design a website that reflects the quality of your care and makes booking effortless.</p>
			<p><strong>Your clinical skills earn loyal patients. Your website earns their first visit.</strong></p>
		</div>
	</div>
</section>

<!-- ========== WHY SPECIALIST DESIGN ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Why Dental Practices Need <span>Specialist Website Design</span></h2>
			<p class="svc-section-lead">Dentistry isn&rsquo;t like other small businesses. Patients are choosing someone to trust with their health, often while feeling anxious or self-conscious. A generic website template rarely handles that well. A specialist website design for dentists approach considers:</p>
			<div class="svc-symptoms">
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-user-heart-line"></i></div>
					<h4>Trust is everything</h4>
					<p>Patients want to see friendly, qualified professionals and a clean, welcoming practice before they ever walk in the door.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-empathize-line"></i></div>
					<h4>Anxiety is common</h4>
					<p>Clear information about pain management, sedation options, and gentle care can be the difference between a booking and a bounce.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-map-pin-2-line"></i></div>
					<h4>Local search matters most</h4>
					<p>Most patients search for &ldquo;dentist near me&rdquo; or &ldquo;dentist in [suburb],&rdquo; so your site needs strong local visibility.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-calendar-check-line"></i></div>
					<h4>Booking needs to be effortless</h4>
					<p>The easier it is to book, the more new patients you&rsquo;ll convert &mdash; especially for time-poor visitors browsing on their phones.</p>
				</div>

			</div>
		</div>
	</div>
</section>

<!-- ========== CUSTOM SERVICES ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Custom Website Design for Australian <span>Dental Practices</span></h2>
			<p class="svc-section-lead">Every practice has its own personality, patient base, and services. We design around all three.</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-palette-line"></i><h4>A calming, professional design</h4><p>We create clean, welcoming designs with warm imagery and clear typography that put anxious patients at ease before they even pick up the phone, while still presenting your practice as modern and professional.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-smartphone-line"></i><h4>Mobile-first design for on-the-go patients</h4><p>Most people search for a dentist on their phone, often when a problem has just started. We design for small screens first, with large tap targets, fast-loading pages, and a prominent phone number and booking button.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-file-list-3-line"></i><h4>Clear service pages for every treatment</h4><p>Patients search for specific treatments, not just &ldquo;dentist.&rdquo; We build dedicated pages for general check-ups, cosmetic dentistry, teeth whitening, veneers, Invisalign and orthodontics, implants, root canals, emergency, and children&rsquo;s dentistry &mdash; so each page can rank and convert on its own.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-quill-pen-line"></i><h4>Trust-building content</h4><p>We showcase your team&rsquo;s qualifications, before-and-after galleries, patient testimonials, and information about your equipment and technology &mdash; all the details that help nervous patients feel confident choosing you.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-calendar-check-line"></i><h4>Online booking integration</h4><p>We can connect your website to popular dental booking and practice management systems, so patients can request or confirm an appointment without ever picking up the phone.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-shield-check-line"></i><h4>AHPRA-compliant by design</h4><p>We build with AHPRA&rsquo;s advertising guidelines in mind around testimonials, before-and-after imagery, and treatment claims, so we don&rsquo;t hand you a website that puts your registration at risk.</p></div>
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
					<h2>Ready to Fill More Chairs With New Patients?</h2>
					<p>Your treatment quality speaks for itself. Your website should say the same thing before patients ever sit in the chair. Talk to our team about website design for dentists in Australia. We&rsquo;ll review your current website for free and show you exactly where you&rsquo;re losing new patient enquiries &mdash; no pressure, no jargon.</p>
					<p style="margin-top:14px;color:rgba(255,255,255,.75);font-size:14px;">We take on a limited number of new practices each month, so get in touch today.</p>
				</div>
				<div class="col-lg-5 col-md-12 text-lg-right">
					<a href="<?= site_url('contact') ?>" class="btn btn-white mb-2">Get Your Free Website Quote</a>
					<p class="mt-2" style="color:rgba(255,255,255,.75);font-size:14px;"><i class="ri-phone-line"></i> Prefer to talk? Email <a href="mailto:<?= e(CONTACT_EMAIL) ?>" style="color:#fff;"><?= e(CONTACT_EMAIL) ?></a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== DENTAL SEO ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0 fadeInUp" data-delay="0.1">
				<img src="<?= file_asset('assets/img/development/ongoing-website-support.webp') ?>" alt="Dental SEO Australia - getting found by patients in your local area" class="img-fluid" style="border-radius:20px;box-shadow:0 18px 40px rgba(10,22,44,.12);" loading="lazy">
			</div>
			<div class="col-lg-6 col-md-12 svc-section fadeInUp" data-delay="0.2">
				<h2 class="svc-section-title">Dental SEO: <span>Getting Found by Patients in Your Area</span></h2>
				<p class="svc-section-lead">A beautiful website means little if patients can&rsquo;t find it. Every dental website we build includes <a class="process-link" href="<?= site_url('small-business-seo') ?>">SEO foundations</a> designed to bring in local, ready-to-book patients.</p>
				<div class="svc-checks">
					<div class="svc-check"><i class="check-ic good ri-map-pin-2-line"></i><div><h4>Local SEO for dental practices</h4><p>Suburb and location pages for the areas you serve, Google Business Profile optimisation, consistent practice details, and local schema markup.</p></div></div>
					<div class="svc-check"><i class="check-ic good ri-star-line"></i><div><h4>Reviews and reputation</h4><p>Patient reviews are one of the strongest trust signals in healthcare search. We help you display and encourage them as part of a wider strategy to build your online reputation.</p></div></div>
				</div>
				<h4 style="font-weight:700;margin-bottom:6px;">Staying compliant with AHPRA advertising guidelines</h4>
				<p>Dental advertising in Australia is regulated, and your website needs to reflect that. We&rsquo;re mindful of AHPRA&rsquo;s guidelines around testimonials, before-and-after imagery, and claims about treatment outcomes, and we&rsquo;ll work with you and your practice&rsquo;s compliance requirements throughout the design process. This isn&rsquo;t a substitute for your own compliance advice, but it means we won&rsquo;t hand you a website that puts your registration at risk.</p>
			</div>
		</div>
	</div>
</section>

<!-- ========== PROCESS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-compass-line"></i>Our process</h3>
			<h2 class="sec-title">Our Dental Website Design <span>Process</span></h2>
			<p class="sec-lead">From first conversation to launch, here&rsquo;s how we build your practice&rsquo;s website.</p>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.1">
					<div class="step-circle"><i class="ri-search-line"></i><span class="step-num">1</span></div>
					<h4>Discovery and strategy</h4>
					<p>We learn about your practice, your services, your ideal patients, and your local competition, and identify the search terms and content that will bring in the right enquiries.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.2">
					<div class="step-circle"><i class="ri-pencil-ruler-line"></i><span class="step-num">2</span></div>
					<h4>Design</h4>
					<p>We create a custom design that reflects your practice&rsquo;s personality and puts patients at ease. You review the design and request changes before we build.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.3">
					<div class="step-circle"><i class="ri-quill-pen-line"></i><span class="step-num">3</span></div>
					<h4>Content and SEO setup</h4>
					<p>We write clear, reassuring content for your homepage, team, and treatment pages, optimised for both patients and search engines.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.4">
					<div class="step-circle"><i class="ri-code-box-line"></i><span class="step-num">4</span></div>
					<h4>Development and testing</h4>
					<p>We build your website, connect your booking system if required, and test everything across devices, browsers, and for speed before launch.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.5">
					<div class="step-circle"><i class="ri-rocket-2-line"></i><span class="step-num">5</span></div>
					<h4>Launch and growth</h4>
					<p>We launch your site, connect your analytics and Google Business Profile, and can continue supporting you with SEO and content as your practice grows.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== FEATURES ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Features Every Dental Website <span>Should Have</span></h2>
			<p class="svc-section-lead">We keep it practical. Every dental website includes the essentials that help you win and reassure new patients.</p>
			<div class="svc-checks">
				<div class="svc-check"><i class="check-ic good ri-phone-line"></i><div><h4>Click-to-call and online booking</h4><p>Buttons on every page, so booking is always one tap away.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-alarm-line"></i><div><h4>Emergency dentistry information</h4><p>Clearly displayed for urgent enquiries.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-team-line"></i><div><h4>Team profiles</h4><p>Showcasing your dentists&rsquo; qualifications and experience.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-gallery-line"></i><div><h4>Before-and-after galleries</h4><p>For cosmetic and restorative work, compliant with AHPRA guidelines.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-star-line"></i><div><h4>Patient testimonials and reviews</h4><p>Social proof that builds trust before the first visit.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-group-line"></i><div><h4>New patient information</h4><p>What to expect at a first visit, so nerves don&rsquo;t win.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-wallet-3-line"></i><div><h4>Payment plans and health fund info</h4><p>Accepted funds and payment options, clearly explained.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-camera-line"></i><div><h4>Practice photos</h4><p>Your clinic, technology, and team, shown off warmly.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-mail-send-line"></i><div><h4>Simple contact and enquiry forms</h4><p>Forms that take seconds to complete.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-edit-line"></i><div><h4>Easy content management</h4><p>So your team can update hours, offers, or announcements.</p></div></div>
			</div>
		</div>
	</div>
</section>

<!-- ========== PRACTICE TYPES ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Website Design for Every Type <span>of Dental Practice</span></h2>
			<p class="svc-section-lead">We work with dental practices of all sizes and specialties, including:</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-user-heart-line"></i><h4>General and family dental practices</h4><p>Websites that welcome returning families and new local patients alike.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-sparkling-line"></i><h4>Cosmetic dentistry clinics</h4><p>Elegant, refined designs that showcase smile transformations.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-emotion-happy-line"></i><h4>Orthodontic practices</h4><p>Invisalign and braces providers with clear treatment journeys.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-first-aid-kit-line"></i><h4>Dental implant and oral surgery specialists</h4><p>Technical depth with a reassuring, confident tone.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-community-line"></i><h4>Paediatric dental practices</h4><p>Friendly, colourful sites that win over both kids and parents.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-building-2-line"></i><h4>Multi-location dental groups</h4><p>Scalable websites with individual location pages for each clinic.</p></div>
				</div>
			</div>
			<p class="svc-section-lead">From capital cities to regional Australia, we build websites that reflect your practice and connect with your local community.</p>
		</div>
	</div>
</section>

<!-- ========== WHY CHOOSE US ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Why Choose Us for <span>Dental Website Design</span></h2>
			<p class="svc-section-lead">There are plenty of web designers out there. Here&rsquo;s what makes a specialist approach different:</p>
			<div class="svc-symptoms">
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-empathize-line"></i></div>
					<h4>We understand dental patients</h4>
					<p>We know how to balance trust, reassurance, and professionalism to encourage bookings.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-shield-check-line"></i></div>
					<h4>We understand the regulatory environment</h4>
					<p>We&rsquo;re mindful of AHPRA advertising guidelines throughout the design process.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-money-dollar-circle-line"></i></div>
					<h4>We&rsquo;re transparent</h4>
					<p>Clear pricing, honest advice, and realistic timelines, with no hidden costs.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-refresh-line"></i></div>
					<h4>We&rsquo;re here after launch</h4>
					<p>We offer ongoing support, updates, and SEO to help your practice keep growing.</p>
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
			<p>Every practice is different, so pricing depends on the number of pages, treatment pages, booking system integration, and whether you&rsquo;d like content writing or ongoing SEO support. Most dental websites are completed within several weeks, depending on how quickly content, photos, and feedback are provided.</p>
			<p>We&rsquo;ll give you a clear, upfront quote so you know exactly what to expect, with no hidden costs.</p>
			<p>Ready for a clear, itemized quote? <a class="process-link" href="<?= site_url('contact') ?>">Request your free website quote</a> and we&rsquo;ll outline the investment alongside what&rsquo;s included.</p>
		</div>
	</div>
</section>

<!-- ========== FAQ ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-question-answer-line"></i>FAQ</h3>
			<h2 class="sec-title">Website Design for Dentists Australia <span>FAQs</span></h2>
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