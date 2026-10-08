<?php
// =========================================================
// B2B Website Design Agency Australia — service page
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$service = [
    'slug'      => 'b2b-website-design-agency-australia',
    'title'     => 'B2B Website Design Agency Australia',
    'pill'      => 'B2B Web Design',
    'metaTitle' => 'B2B Website Design Agency Australia | Generate Qualified Leads',
    'metaDesc'  => 'A B2B website design agency in Australia building credible, lead-generating websites for complex sales. Get a free quote from our team today.',
    'h1'        => 'B2B Website Design Agency Australia: Websites Built for Complex Sales',
    'lead'      => 'Selling to businesses isn&rsquo;t like selling to consumers. Your buyers aren&rsquo;t making impulse decisions. They&rsquo;re researching, comparing, building a business case, and often looping in colleagues before they ever fill out a form. Your website has to do more than look good. It has to build credibility with every kind of stakeholder involved in that decision. We&rsquo;re a B2B website design agency in Australia that builds websites for exactly this kind of sale &mdash; websites that explain complex offerings clearly, establish trust with technical and non-technical buyers alike, and generate the qualified leads your sales team actually wants to follow up.',
    'image'     => 'assets/img/development/b2b-website-design-agency-australia.jpg',
    'imageAlt'  => 'B2B website design agency Australia - credible, lead-generating websites built for complex sales',
    'related'   => ['enterprise-seo', 'seo-management', 'technical-seo-audits'],

    'faqs' => [
        ['q' => 'How much does B2B website design cost?', 'a' => 'Cost depends on the complexity of your offering, the number of pages and content required, and any integrations with your CRM or marketing tools. Request a free quote and we&rsquo;ll give you a clear estimate based on your project.'],
        ['q' => 'How long does a B2B website take to build?', 'a' => 'B2B websites typically take longer than simple business sites due to the depth of content and stakeholder review involved. We&rsquo;ll share a realistic timeline once we understand the scope of your project.'],
        ['q' => 'Can you integrate our website with our CRM?', 'a' => 'In most cases, yes. We commonly connect websites to CRM and marketing automation platforms so leads flow directly into your existing sales process. Compatibility depends on your specific systems, which we&rsquo;ll confirm during discovery.'],
        ['q' => 'Do you write the content, or do we need to provide it?', 'a' => 'We can do either. Many B2B clients have deep product or technical knowledge that we translate into clear, buyer-friendly content, while others prefer to provide their own content for us to structure and optimise.'],
        ['q' => 'Will our website generate leads, or just traffic?', 'a' => 'Traffic alone isn&rsquo;t the goal. We design content, forms, and calls to action specifically to qualify and convert visitors into genuine sales opportunities, not just enquiries.'],
        ['q' => 'Do you work with technical or engineering-heavy businesses?', 'a' => 'Yes. We regularly work with manufacturers, industrial suppliers, and technical service providers, translating complex offerings into clear, credible website content.'],
        ['q' => 'Do you offer ongoing SEO and content support?', 'a' => 'Yes. B2B SEO is a long-term effort, and we offer ongoing content, SEO, and optimisation support to keep generating qualified leads after launch &mdash; see our <a class="process-link" href="' . site_url('seo-management') . '">SEO management</a> service.'],
    ],

    'ctaTitle' => 'Let&rsquo;s Build a Website That Supports Your Whole Sales Process',
    'ctaLead'  => 'Your buyers are doing their homework long before they ever speak to your sales team. Your website needs to hold up to that scrutiny, at every stage, for every stakeholder involved. As your dedicated B2B website design agency in Australia, we&rsquo;ll build a credible, lead-generating website that supports complex sales and grows your qualified pipeline.',
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
				<span class="svc-kicker"><i class="ri-empathize-line"></i>Complex-sale ready</span>
				<span class="svc-kicker"><i class="ri-team-line"></i>Multi-stakeholder</span>
				<span class="svc-kicker"><i class="ri-focus-3-line"></i>Lead-focused</span>
				<span class="svc-kicker"><i class="ri-link"></i>Integrates with your stack</span>
			</div>
		</div>
	</div>
</section>

<!-- ========== SERVICE FEATURE IMAGE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="fadeInUp" data-delay="0.1">
			<img src="<?= file_asset('assets/img/development/b2b-website-design-agency-australia.jpg') ?>" alt="<?= e($service['imageAlt']) ?>" class="img-fluid w-100" style="border-radius:20px;box-shadow:0 18px 40px rgba(10,22,44,.12);" loading="lazy">
		</div>
	</div>
</section>

<!-- ========== INTRO ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-intro fadeInUp" data-delay="0.1">
			<p>Selling to businesses isn&rsquo;t like selling to consumers. Your buyers aren&rsquo;t making impulse decisions. They&rsquo;re researching, comparing, building a business case, and often looping in colleagues before they ever fill out a form. Your website has to do more than look good. It has to build credibility with every kind of stakeholder involved in that decision.</p>
			<p>We&rsquo;re a B2B website design agency in Australia that builds websites for exactly this kind of sale. Websites that explain complex offerings clearly, establish trust with technical and non-technical buyers alike, and generate the qualified leads your sales team actually wants to follow up.</p>
			<p>Whether you&rsquo;re a manufacturer, a software company, a professional services firm, or an industrial supplier, we&rsquo;ll build a website that supports your entire sales process, not just your homepage.</p>
			<p><strong>Your website has to do more than look good.</strong></p>
		</div>
	</div>
</section>

<!-- ========== WHY SPECIALIST ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Why B2B Companies Need a Specialist <span>Website Design Agency</span></h2>
			<p class="svc-section-lead">Most web design agencies are built for simple, transactional businesses: a service, a price, a booking. B2B is different, and a generalist approach often falls short. A specialist B2B website design agency understands:</p>
			<div class="svc-symptoms">
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-time-line"></i></div>
					<h4>Longer, more considered sales cycles</h4>
					<p>Your website needs to support buyers at every stage, from early research to final evaluation, not just capture a quick enquiry.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-team-line"></i></div>
					<h4>Multiple stakeholders</h4>
					<p>A purchasing decision might involve a technical evaluator, a budget holder, and an end user, each looking for different information.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-node-tree"></i></div>
					<h4>Complex products and services</h4>
					<p>Your offering may need diagrams, specifications, case studies, and clear explanations that a simple sales page can&rsquo;t deliver.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-filter-3-line"></i></div>
					<h4>Lead quality over lead quantity</h4>
					<p>A flood of low-quality enquiries wastes your sales team&rsquo;s time. You need a website that qualifies and filters, not just captures.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== CUSTOM SERVICES ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Custom B2B Website Design <span>Services</span></h2>
			<p class="svc-section-lead">We build websites around how your buyers actually research and decide, not a generic template.</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-lightbulb-line"></i><h4>Websites that explain complex offerings clearly</h4><p>If your product or service is technical or multi-faceted, clarity is everything. We structure content, diagrams, and page flow so buyers can quickly understand what you do, how it works, and why it matters to them.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-award-line"></i><h4>Credibility-building design</h4><p>We showcase client logos, case studies, certifications, awards, and testimonials prominently, because B2B buyers are looking for proof, not promises, before they commit their organisation&rsquo;s budget and reputation.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-bar-chart-box-line"></i><h4>Content for every stage of the buyer journey</h4><p>Early-stage researchers (guides, insights, comparisons), mid-stage evaluators (case studies, specifications, FAQs), and late-stage buyers (pricing guidance, demos, contact paths) &mdash; your website supports the whole journey, not just the final click.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-filter-3-line"></i><h4>Lead capture that qualifies, not just collects</h4><p>We design forms and calls to action that gather the information your sales team actually needs, such as company size, budget range, or specific requirements, so you spend less time chasing unqualified leads.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-plug-line"></i><h4>Integration with your sales and marketing stack</h4><p>We connect your website to the CRM, marketing automation, and analytics tools you already use, so leads flow directly into your sales process and you can track performance from first visit to closed deal.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-building-2-line"></i><h4>Design that scales with your business</h4><p>Structure, components, and content systems built to grow with you &mdash; new markets, new product lines, and new proof points slot in without a rebuild.</p></div>
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
					<h2>Want a Website That Actually Supports Your Sales Team?</h2>
					<p>Your sales team deserves better leads, not just more of them. Talk to our B2B website design agency. We&rsquo;ll review your current website for free and show you exactly where it&rsquo;s losing credibility or qualified leads &mdash; no pressure, no jargon.</p>
					<p style="margin-top:14px;color:rgba(255,255,255,.75);font-size:14px;">We take on a limited number of new B2B projects each quarter, so get in touch today.</p>
				</div>
				<div class="col-lg-5 col-md-12 text-lg-right">
					<a href="<?= site_url('contact') ?>" class="btn btn-white mb-2">Get Your Free Website Audit</a>
					<p class="mt-2" style="color:rgba(255,255,255,.75);font-size:14px;"><i class="ri-phone-line"></i> Prefer to talk? Email <a href="mailto:<?= e(CONTACT_EMAIL) ?>" style="color:#fff;"><?= e(CONTACT_EMAIL) ?></a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== B2B SEO ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0 fadeInUp" data-delay="0.1">
				<img src="<?= file_asset('assets/img/development/b2b-seo-australia.jpg') ?>" alt="B2B SEO Australia - getting found by the right buyers" class="img-fluid" style="border-radius:20px;box-shadow:0 18px 40px rgba(10,22,44,.12);" loading="lazy">
			</div>
			<div class="col-lg-6 col-md-12 svc-section fadeInUp" data-delay="0.2">
				<h2 class="svc-section-title">B2B SEO: <span>Getting Found by the Right Buyers</span></h2>
				<p class="svc-section-lead">B2B search behaviour is different from consumer search. Buyers often search for specific problems, technical terms, or comparisons rather than broad, generic phrases. Our SEO approach reflects that.</p>
				<div class="svc-checks">
					<div class="svc-check"><i class="check-ic good ri-key-2-line"></i><div><h4>Keyword strategy for niche, technical audiences</h4><p>We research the specific terms your buyers and technical evaluators actually use, including industry jargon and long-tail searches, and build content around them rather than chasing broad, high-competition keywords that rarely convert.</p></div></div>
					<div class="svc-check"><i class="check-ic good ri-quill-pen-line"></i><div><h4>Content marketing and thought leadership</h4><p>Guides, whitepapers, case studies, and insight articles help you rank for research-stage searches while establishing your business as a credible authority in your industry.</p></div></div>
					<div class="svc-check"><i class="check-ic good ri-speed-line"></i><div><h4>Technical SEO foundations</h4><p><a class="process-link" href="<?= site_url('technical-seo-audits') ?>">Technical SEO</a> makes sure your site is fast, secure, mobile-friendly, and properly structured, so search engines can crawl and index it effectively, and so your credibility-building content actually gets found.</p></div></div>
					<div class="svc-check"><i class="check-ic good ri-map-pin-2-line"></i><div><h4>Local and national visibility</h4><p>Whether you sell to businesses across Australia or focus on specific states and regions, we tailor your SEO strategy to match where your buyers actually are.</p></div></div>
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
			<h2 class="sec-title">Our B2B Website Design <span>Process</span></h2>
			<p class="sec-lead">From buyer research to ongoing optimisation, every step is built to support a complex sale.</p>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.1">
					<div class="step-circle"><i class="ri-search-eye-line"></i><span class="step-num">1</span></div>
					<h4>Discovery and buyer research</h4>
					<p>We learn about your business, your offering, your typical buying process, and the different stakeholders involved in a purchase decision.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.2">
					<div class="step-circle"><i class="ri-stack-line"></i><span class="step-num">2</span></div>
					<h4>Content and information architecture</h4>
					<p>We map out the content and pages needed to support buyers at every stage, from early research to final decision, and plan a site structure that makes sense for a complex offering.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.3">
					<div class="step-circle"><i class="ri-pencil-ruler-line"></i><span class="step-num">3</span></div>
					<h4>Design</h4>
					<p>We create a professional, credibility-building design that reflects your brand and positions your business as a serious, trustworthy option. You review it and request changes before we build.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.4">
					<div class="step-circle"><i class="ri-plug-line"></i><span class="step-num">4</span></div>
					<h4>Development and integration</h4>
					<p>We build your website and connect it to your CRM, marketing automation, and analytics tools, so leads and data flow where you need them.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.5">
					<div class="step-circle"><i class="ri-arrow-up-circle-line"></i><span class="step-num">5</span></div>
					<h4>Launch and ongoing optimisation</h4>
					<p>We launch your site, then continue optimising content, SEO, and conversion paths based on how real buyers are actually using it.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== FEATURES ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Features That Support <span>B2B Sales</span></h2>
			<p class="svc-section-lead">The building blocks of a website that supports research, evaluation, and conversion.</p>
			<div class="svc-checks">
				<div class="svc-check"><i class="check-ic good ri-file-chart-line"></i><div><h4>Case studies with measurable results</h4><p>Client success stories that give buyers proof they can take to their teams.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-archive-2-line"></i><div><h4>Resource libraries</h4><p>Guides, whitepapers, and downloadable content for research-stage buyers.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-settings-3-line"></i><div><h4>Detailed product and service pages</h4><p>With specifications and technical detail for evaluators.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-questionnaire-line"></i><div><h4>Qualifying enquiry and demo request forms</h4><p>Forms that capture the context your sales team needs to prioritise.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-plug-line"></i><div><h4>CRM and marketing automation integration</h4><p>Leads flow straight into the systems you already use.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-medal-line"></i><div><h4>Client logos, certifications, and accreditations</h4><p>Proof points displayed where they carry the most weight.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-user-3-line"></i><div><h4>Team and leadership pages</h4><p>Build trust with decision-makers who want to know who they&rsquo;ll work with.</p></div></div>
				<div class="svc-check"><i class="check-ic good ri-pie-chart-2-line"></i><div><h4>Analytics and lead tracking</h4><p>Measure what&rsquo;s driving pipeline, not just traffic.</p></div></div>
			</div>
		</div>
	</div>
</section>

<!-- ========== WHO WE WORK WITH ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Who We <span>Work With</span></h2>
			<p class="svc-section-lead">As a B2B website design agency in Australia, we work with businesses across a wide range of industries, including:</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-settings-3-line"></i><h4>Manufacturers and industrial suppliers</h4><p>Clear, credible sites for firms whose depth and reliability get judged online.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-code-s-slash-line"></i><h4>Software and technology companies</h4><p>Websites that translate product capability into buyer confidence.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-briefcase-line"></i><h4>Professional and consulting services</h4><p>Authority and trust for firms selling expertise and outcomes.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-truck-line"></i><h4>Logistics and supply chain businesses</h4><p>Operational clarity that makes complex services easy to evaluate.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-shield-check-line"></i><h4>Financial and insurance services</h4><p>Regulated, credible, and reassuring digital experiences.</p></div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
					<div class="feature-card h-100"><i class="ri-arrow-right-circle-line"></i><h4>Any business selling to businesses</h4><p>Whatever your industry &mdash; if it&rsquo;s a B2B sale, we design for it.</p></div>
				</div>
			</div>
			<p class="svc-section-lead">From Sydney and Melbourne to businesses right across Australia, we build websites that reflect the complexity of what you sell and the sophistication of your buyers.</p>
		</div>
	</div>
</section>

<!-- ========== WHY CHOOSE US ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Why Choose Us as Your B2B <span>Website Design Agency</span></h2>
			<p class="svc-section-lead">There are plenty of general web design agencies. Here&rsquo;s what sets a B2B specialist apart:</p>
			<div class="svc-symptoms">
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-node-tree"></i></div>
					<h4>We understand complex sales</h4>
					<p>We design for research, evaluation, and multi-stakeholder decisions, not just quick, transactional purchases.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-focus-3-line"></i></div>
					<h4>We focus on lead quality</h4>
					<p>Our goal is qualified pipeline for your sales team, not just enquiry volume.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-plug-line"></i></div>
					<h4>We integrate with your existing systems</h4>
					<p>Your website becomes part of your sales and marketing stack, not a standalone island.</p>
				</div>
				<div class="svc-symptom">
					<div class="symptom-ic"><i class="ri-refresh-line"></i></div>
					<h4>We&rsquo;re here for the long term</h4>
					<p>B2B growth takes ongoing effort, and we offer continued support, content, and SEO as your business evolves.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== PRICING ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">B2B Website Design Pricing <span>and Timeline</span></h2>
			<p>Every B2B project is different, so we quote based on your specific requirements. Cost depends on the number of pages, the complexity of your offering, content requirements, integrations, and whether you want ongoing SEO or content support.</p>
			<p>B2B websites often take longer to plan and build than simpler consumer sites, given the depth of content and stakeholder input usually involved. We&rsquo;ll give you a realistic timeline and a clear, upfront quote at the start.</p>
			<p>Ready for a clear, itemized quote? <a class="process-link" href="<?= site_url('contact') ?>">Request your free B2B website quote</a> and we&rsquo;ll outline the investment alongside what&rsquo;s included.</p>
		</div>
	</div>
</section>

<!-- ========== FAQ ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-question-answer-line"></i>FAQ</h3>
			<h2 class="sec-title">B2B Website Design Agency Australia <span>FAQs</span></h2>
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
					<a href="<?= site_url('contact') ?>" class="btn btn-white mb-2">Request Your Free Quote</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php require __DIR__ . '/../includes/footer.php';