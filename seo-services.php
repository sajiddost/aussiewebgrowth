<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/functions.php';

$pageTitle       = 'SEO That Gets Prioritized, Not Just Recommended';
$pageDescription = 'HelloSuggest ranks the fifty problems in a typical SEO audit down to the five that actually move rankings, traffic, and revenue — then makes sure they happen. Technical SEO, SEO management, AEO & GEO, and ongoing website support.';
$active          = 'home';

// FAQ content doubles as FAQPage structured data for answer engines (AEO).
$faqs = [
    ['q' => 'How is HelloSuggest different from other SEO agencies?', 'a' => 'Most of the difference comes down to prioritization. We\'d rather hand you five fixes that matter than fifty that never get implemented.'],
    ['q' => 'Do you work with small businesses or only larger companies?', 'a' => 'Both. Strategy and pricing scale to the size and complexity of the site, not the other way around.'],
    ['q' => 'What\'s the difference between traditional SEO and AEO or GEO?', 'a' => 'Traditional SEO focuses on ranking in search results. AEO focuses on getting your content selected as a direct answer, in a featured snippet or an AI Overview. GEO focuses on getting cited by generative AI tools like ChatGPT or Perplexity. They overlap with core SEO fundamentals, but the content structure and clarity requirements differ.'],
    ['q' => 'Do I need to choose between semantic SEO and traditional keyword targeting?', 'a' => 'No. Semantic SEO is a more accurate way of thinking about relevance, covering the entities and concepts a topic actually involves instead of chasing exact-match phrases. Keyword research still matters. It just isn\'t the whole picture anymore.'],
    ['q' => 'Can you guarantee my content gets cited by ChatGPT or Google\'s AI Overview?', 'a' => 'No. What we can do is structure content in a way that gives it a realistic chance: clear answers, credible sourcing, and the specificity these systems tend to pull from.'],
    ['q' => 'Do you offer white label SEO for agencies?', 'a' => 'Yes. We handle audits, strategy, execution, and client-ready reporting under your brand.'],
    ['q' => 'Do you offer one-time audits or only ongoing management?', 'a' => 'Both. Some clients need a single technical audit. Others need continuous management. We scope the engagement to what the site actually needs.'],
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

<!-- ========== HERO ========== -->
<section id="home" class="hero section">
	<div class="hero-glow hero-glow-1"></div>
	<div class="hero-glow hero-glow-2"></div>
	<div class="container">
		<div class="col-lg-10 col-xs-12 mx-auto text-center no-padding fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-sparkling-2-line"></i>Prioritized SEO &bull; AEO &bull; GEO &bull; Website Support</h3>
			<h1>SEO That Gets <span>Prioritized,</span> Not Just Recommended</h1>
			<p class="hero-lead">Most SEO reports list every problem they can find. Ours rank the same problems by business impact &mdash; so you know the five fixes that actually move the needle this quarter, and we make sure they happen.</p>
			<p class="hero-copy">Search engines don't reward effort. They reward pages that answer a query better than the alternatives &mdash; and increasingly, pages that AI systems can understand well enough to cite. HelloSuggest is an SEO management company built around that reality. We work with small business owners who need results without wasted spend, and with enterprise teams managing thousands of pages across multiple markets.</p>
			<div class="hero-audit">
				<form method="get" action="<?= site_url('audit') ?>" class="hero-audit-form" novalidate>
					<div class="hero-audit-input">
						<i class="ri-global-line"></i>
						<input type="text" name="url" placeholder="Enter your website URL - e.g. example.com" required aria-label="Your website URL">
					</div>
					<button type="submit" class="btn btn-primary">Free SEO Audit <i class="ri-rocket-line"></i></button>
				</form>
				<p class="hero-audit-note"><i class="ri-cpu-line"></i>Instant, free technical audit &mdash; titles, meta, headings, schema, AI-readiness and speed</p>
			</div>
			<div>
				<a href="<?= site_url('contact') ?>" class="btn btn-primary">Get a Free SEO Assessment</a>
				<a href="#services" class="btn btn-dark">Explore Services</a>
			</div>
			<div class="hero-badges">
				<span><i class="ri-shield-check-line"></i>White-hat, Google-compliant</span>
				<span><i class="ri-time-line"></i>Responses within 24 hours</span>
				<span><i class="ri-emotion-happy-line"></i>No ranking guarantees, no tricks</span>
			</div>
		</div>
	</div>
</section>
<!-- ========== END HERO ========== -->

<!-- ========== STATS ========== -->
<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
				<div class="stat-box fadeInUp" data-delay="0.1">
					<h4>50 &rarr; 5</h4>
					<p>Audit findings narrowed to the fixes that actually move rankings and revenue</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
				<div class="stat-box fadeInUp" data-delay="0.2">
					<h4>24 hrs</h4>
					<p>Response time on every engagement &mdash; no &ldquo;we&rsquo;ll circle back&rdquo;</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
				<div class="stat-box fadeInUp" data-delay="0.3">
					<h4>100%</h4>
					<p>White-hat, Google-compliant work &mdash; sustainable growth, no shortcuts</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
				<div class="stat-box fadeInUp" data-delay="0.4">
					<h4>0</h4>
					<p>Ranking guarantees or empty promises made on your dime</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== END STATS ========== -->

<!-- ========== WHY BUSINESSES COME TO US ========== -->
<section class="section">
	<div class="container">
		<div class="row align-items-end">
			<div class="col-lg-6 col-md-12">
				<div class="sec-header left fadeInUp" data-delay="0.1">
					<h3 class="pill"><i class="ri-focus-3-line"></i>Why Businesses Come to Us</h3>
					<h2 class="sec-title">Most SEO Work Stops at Diagnosis.<br><span>We Turn It Into Action.</span></h2>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 fadeInUp" data-delay="0.2">
				<div class="hs-split-text">
					<p>Every business that contacts an SEO agency has already tried something. A freelancer who disappeared after month two. An in-house attempt that stalled once the person running it got pulled onto other work. Another firm that sent a 40-page audit nobody read. The pattern repeats because most SEO work stops at diagnosis &mdash; it rarely gets translated into work a business can actually execute.</p>
					<p>That gap is where we operate. Our job isn't to hand you a list of everything that could be improved. It's to tell you which five things, out of the fifty flagged in a typical audit, will actually move rankings and revenue if fixed this quarter &mdash; then keep them moving.</p>
				</div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-lg-6 col-md-12 mb-4">
				<div class="feature-card h-100 fadeInUp" data-delay="0.2">
					<i class="ri-double-quotes-l"></i>
					<h4>A page can rank &amp; still fail</h4>
					<p>A page can rank for its target keyword and still fail to convert, because it never matched what the searcher actually wanted.</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mb-4">
				<div class="feature-card h-100 fadeInUp" data-delay="0.4">
					<i class="ri-double-quotes-l"></i>
					<h4>Hundreds of links, no authority</h4>
					<p>A site can have hundreds of backlinks and a weak authority profile, because most of those links carry no topical relevance.</p>
				</div>
			</div>
		</div>
		<p class="sec-lead text-center mt-4 fadeInUp" style="font-weight:600;color:var(--black-100);" data-delay="0.3">These aren&rsquo;t edge cases. They&rsquo;re the normal condition of most websites we&rsquo;re brought in to fix.</p>
	</div>
</section>
<!-- ========== END WHY ========== -->

<!-- ========== THE PROCESS ========== -->
<section id="how" class="section">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-refresh-line"></i>How We Work</h3>
			<h2 class="sec-title">A Repeatable Cycle, <span>Not Another Report</span></h2>
			<p class="sec-lead">Assessment, Priority, Execution, Measurement &mdash; run as a process, repeated on a schedule. Most SEO projects don&rsquo;t fail from a lack of expertise. They fail from a lack of process. We fix that.</p>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.1">
					<div class="step-circle"><i class="ri-search-eye-line"></i><span class="step-num">1</span></div>
					<h4>Assessment</h4>
					<p>We review technical condition, existing content, and the competitive landscape before recommending anything &mdash; a baseline to measure everything against.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.2">
					<div class="step-circle"><i class="ri-list-check-2"></i><span class="step-num">2</span></div>
					<h4>Prioritization</h4>
					<p>Every finding is ranked by expected impact against implementation effort. Fifty flagged problems become the five worth doing this quarter.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.3">
					<div class="step-circle"><i class="ri-tools-line"></i><span class="step-num">3</span></div>
					<h4>Execution</h4>
					<p>Fixes get implemented directly, or specified precisely enough for your developers to act on &mdash; nothing sits in a report waiting to be decoded.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.4">
					<div class="step-circle"><i class="ri-line-chart-line"></i><span class="step-num">4</span></div>
					<h4>Measurement</h4>
					<p>Progress is tracked against agreed benchmarks &mdash; and when something isn&rsquo;t working, we say so and adjust instead of hiding it in a quarterly review.</p>
				</div>
			</div>
		</div>
		<p class="sec-lead text-center fadeInUp" data-delay="0.2">Want the playbook? <a class="process-link" href="<?= site_url('seo-process-measurement-and-honesty') ?>">Read how the four-stage cycle actually plays out</a> &mdash; or ask us to run it on your site.</p>
	</div>
</section>
<!-- ========== END PROCESS ========== -->

<!-- ========== SEARCH ISN'T JUST TEN BLUE LINKS ========== -->
<section class="section">
	<div class="container">
		<div class="seo-content-wrap fadeInUp" data-delay="0.1">
			<div class="row no-gutters">
				<div class="col-lg-7">
					<div class="seo-content-left">
						<h3 class="pill" style="color:#fff;border-color:rgba(255,255,255,.25);"><i class="ri-sparkling-2-line"></i>Semantic SEO &bull; AEO &bull; GEO</h3>
						<h2>Search Isn't Just <span style="color:var(--primary-color);">Ten Blue Links</span> Anymore</h2>
						<p class="seo-lead">A user searching today might get an answer from Google's AI Overview, a response from ChatGPT, or a summary pulled by Perplexity, none of which require a click to your site. This changes what "ranking" actually means, and it's why semantic SEO, AEO, and GEO are core parts of how we work rather than add-ons.</p>
						<div class="seo-feature-item">
							<div class="seo-icon"><i class="ri-node-tree"></i></div>
							<div>
								<h3>Semantic SEO</h3>
								<p>The foundation underneath this shift. Search engines stopped matching keywords a long time ago. They now try to understand entities, the relationships between them, and the intent behind a query. A page that never establishes what a company actually does, who it serves, and how it differs from adjacent services gives engines less to work with, no matter how many times the phrase appears on the page.</p>
							</div>
						</div>
						<div class="seo-feature-item">
							<div class="seo-icon"><i class="ri-chat-smile-line"></i></div>
							<div>
								<h3>AEO &mdash; Answer Engine Optimization</h3>
								<p>AI-driven answer boxes and chat interfaces pull from content that answers a specific question clearly and early, often in the first sentence or two of a section. Burying the answer under three paragraphs of preamble worked fine for traditional rankings. It works against you here.</p>
							</div>
						</div>
						<div class="seo-feature-item">
							<div class="seo-icon"><i class="ri-robot-line"></i></div>
							<div>
								<h3>GEO &mdash; Generative Engine Optimization</h3>
								<p>Traditional SEO focuses on ranking in search results. AEO focuses on getting your content selected as a direct answer. GEO focuses on getting cited by generative AI tools like ChatGPT or Perplexity. Getting cited depends on whether your content is structured in a way models can parse, whether your site reads as a credible source, and whether the information is stated plainly enough to be lifted and summarized without distortion.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="seo-content-right">
						<img src="assets/img/seo-services.webp" alt="Our team in sync with how AI search works now" class="seo-vertical-img" loading="lazy">
						<h3>Why it matters now</h3>
						<div class="seo-point">
							<i class="ri-question-answer-line"></i>
							<div>
								<strong>AI Overviews take the click</strong>
								<span>A direct answer can satisfy the searcher without a visit to your site.</span>
							</div>
						</div>
						<div class="seo-point">
							<i class="ri-chat-4-line"></i>
							<div>
								<strong>Chatbots cite what they can parse</strong>
								<span>ChatGPT, Gemini and Perplexity lift from plainly structured, credible pages.</span>
							</div>
						</div>
						<div class="seo-point">
							<i class="ri-eye-off-line"></i>
							<div>
								<strong>Ranking isn't enough anymore</strong>
								<span>Being invisible to AI answers means losing visibility in both places.</span>
							</div>
						</div>
						<div class="seo-point">
							<i class="ri-shield-check-line"></i>
							<div>
								<strong>The fundamentals still apply</strong>
								<span>Crawlability and entity clarity underpin every channel, classic or generative.</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<p class="sec-lead mt-4 fadeInUp" data-delay="0.2">None of this replaces traditional SEO. A technically broken site won't get crawled well enough to be cited by an AI model any more than it'll rank in classic search. A technically sound site that never structures its content for entity clarity is leaving visibility on the table in both places.</p>
	</div>
</section>
<!-- ========== END SEARCH ========== -->

<!-- ========== CORE SEO SERVICES ========== -->
<section id="services" class="section">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-window-2-line"></i>Core Services</h3>
			<h2 class="sec-title">One Consultancy, <span>Every Layer of Search</span></h2>
			<p class="sec-lead">Depending on where a site sits in its lifecycle, that can mean a technical rebuild, a content strategy rework, an authority campaign, ongoing management, or website support &mdash; each scoped to the site, not to a package.</p>
		</div>
		<div class="row">
			<?php $homeServiceSlugs = ['technical-seo-audits', 'seo-management', 'on-page-seo', 'enterprise-seo', 'semantic-entity-seo', 'authority-link-building', 'aeo-geo', 'wordpress-seo', 'white-label-seo']; ?>
			<?php $svcIndex = 0; foreach ($homeServiceSlugs as $slug): $svc = ($GLOBALS['SERVICES'] ?? [])[$slug] ?? null; if (!$svc) { continue; } ?>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="<?= min(0.1 + ($svcIndex % 3) * 0.12, 0.4) ?>">
					<div class="industry-icon"><i class="<?= e($svc['icon']) ?>"></i></div>
					<h4><?= e($svc['name']) ?></h4>
					<p><?= e($svc['tagline']) ?></p>
					<a href="<?= site_url($svc['slug']) ?>" class="industry-link">Explore <?= e($svc['name']) ?> <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<?php $svcIndex++; endforeach; ?>
		</div>
	</div>
</section>
<!-- ========== END CORE SERVICES ========== -->

<!-- ========== WHITE LABEL / AGENCIES ========== -->
<section class="section">
	<div class="container">
		<div class="row hs-split">
			<div class="col-lg-6 col-md-12 fadeInUp" data-delay="0.1">
				<div class="hs-split-text">
					<p class="pill"><i class="ri-user-star-line"></i>For Agencies</p>
					<h2>White Label SEO <span>Fulfillment</span></h2>
					<p>If you run a marketing, web design, or advertising agency, clients ask for SEO eventually. Building that capability in-house means hiring specialists, keeping them current on algorithm changes, and absorbing the cost during slow months.</p>
					<p>White label SEO handles the work behind the scenes, under your name. That includes technical audits, content strategy, link building, and monthly reporting formatted for your clients, not ours. Your client relationship stays yours. We stay invisible unless you decide otherwise.</p>
					<ul class="hs-list-solid">
						<li>Overflow support for one client or a full fulfillment partner for your entire book of business.</li>
						<li>Pricing scales with volume, sized to your client mix &mdash; a five-client agency differs from a fifty-client one.</li>
						<li>White-labeled ongoing website support too &mdash; maintenance under your brand, without you staffing it.</li>
					</ul>
					<a href="<?= site_url('contact') ?>" class="btn btn-primary">Discuss Your Client Mix</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 fadeInUp" data-delay="0.3">
				<img src="<?= site_url('assets/img/white-label-SEO-fulfillment.webp') ?>" class="img-fluid rounded" alt="White label SEO fulfillment" />
			</div>
		</div>
	</div>
</section>
<!-- ========== END AGENCIES ========== -->

<!-- ========== WHO THIS IS FOR ========== -->
<section class="section">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-user-heart-line"></i>Who This Is For</h3>
			<h2 class="sec-title">Different Situations. <span>Different Priorities.</span></h2>
			<p class="sec-lead">None of these situations call for the same tactics, which is one reason we're cautious about agencies that pitch identical packages regardless of client size or type.</p>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.1">
					<div class="industry-icon"><i class="ri-rocket-2-line"></i></div>
					<h4>Starting From Zero</h4>
					<p>If your current visibility is close to zero, the priority is usually foundational: technical health, a realistic content plan, and a small number of high-intent keywords you can actually compete for.</p>
					<a href="<?= site_url('contact') ?>" class="industry-link">Start from zero <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.2">
					<div class="industry-icon"><i class="ri-refresh-line"></i></div>
					<h4>Managing an Existing Program</h4>
					<p>If you want an existing program run more consistently, the priority shifts: a repeatable process, clear reporting, and incremental gains tracked over time rather than one big overhaul.</p>
					<a href="<?= site_url('contact') ?>" class="industry-link">Take over a program <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.3">
					<div class="industry-icon"><i class="ri-server-line"></i></div>
					<h4>Large Sites With Technical Debt</h4>
					<p>If you're dealing with a large site carrying years of technical debt, the priority changes again: scale, governance, and fixes that can be templated across thousands of pages without breaking something else.</p>
					<a href="<?= site_url('contact') ?>" class="industry-link">Tackle technical debt <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.4">
					<div class="industry-icon"><i class="ri-building-2-line"></i></div>
					<h4>Agency Owners</h4>
					<p>If you're an agency owner, the priority isn't strategy at all. It's finding a partner who can deliver consistent, white-labeled work without you having to manage the details.</p>
					<a href="<?= site_url('contact') ?>" class="industry-link">White label partner <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== END WHO THIS IS FOR ========== -->

<!-- ========== GLOBAL / PRICING / NO PROMISES ========== -->
<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-12 mb-4">
				<div class="feature-card fadeInUp" data-delay="0.1">
					<i class="ri-earth-line"></i>
					<h4>Global Reach, Local Understanding</h4>
					<p>HelloSuggest works with clients across regions and time zones. The underlying principles of crawlability, relevance, and authority hold globally, but execution doesn't. A campaign built for one market and a multilingual enterprise rollout in another require different technical setups, different competitive research, and different content approaches. We adjust the specifics to the market while keeping the standards behind the work consistent.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 mb-4">
				<div class="feature-card fadeInUp" data-delay="0.2">
					<i class="ri-money-dollar-circle-line"></i>
					<h4>Pricing Tracks Scope, Not Packages</h4>
					<p>We're often asked whether we're an affordable SEO company or a premium one. The honest answer is that it depends on scope. A small business needing to fix a handful of foundational issues costs less than an enterprise engagement spanning multiple markets and thousands of pages. Pricing is tied to the actual work involved, never a fixed package designed to look comprehensive on a sales page. <a class="process-link" href="<?= site_url('seo-on-pricing-reality') ?>">Read how we price engagements.</a></p>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 mb-4">
				<div class="feature-card fadeInUp" data-delay="0.3">
					<i class="ri-shield-check-line"></i>
					<h4>A Note on What We Won't Promise</h4>
					<p>We won't guarantee a specific ranking position, a fixed percentage increase in traffic, or a set number of AI citations. Anyone who guarantees those outcomes is either overconfident or not being straight with you. Algorithms change, competitors adjust, and results depend on factors outside any agency's control. What we can commit to is a clear process, honest reporting, and prioritization based on evidence rather than guesswork.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== END GLOBAL REACH ========== -->

<!-- ========== PRICING ========== -->
<section id="pricing" class="section">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-price-tag-3-line"></i>Pricing</h3>
			<h2 class="sec-title">Three Ways to <span>Work With Us</span></h2>
			<p class="sec-lead">Engagements follow the scope, not a template. These are the three shapes that work usually takes &mdash; every quote starts from a free assessment of your site.</p>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="pricing-card fadeInUp" data-delay="0.1">
					<h4>Audit &amp; Fix</h4>
					<div class="pricing-price">$800<span class="pricing-cadence">one-time</span></div>
					<p class="pricing-desc">A full technical and AI-readiness audit, ranked down to the five fixes that actually move rankings and revenue.</p>
					<ul class="pricing-features">
						<li><i class="ri-check-line"></i>Technical + AEO/GEO readiness audit</li>
						<li><i class="ri-check-line"></i>Findings ranked by impact vs. effort</li>
						<li><i class="ri-check-line"></i>Top-five fixes implemented or specified</li>
						<li><i class="ri-check-line"></i>Baseline report for your team</li>
					</ul>
					<a href="<?= site_url('contact') ?>" class="btn btn-dark">Start the Audit</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="pricing-card is-featured fadeInUp" data-delay="0.2">
					<span class="pricing-badge">Most Popular</span>
					<h4>Ongoing Management</h4>
					<div class="pricing-price">$1,500<span class="pricing-cadence">/ month</span></div>
					<p class="pricing-desc">The repeatable cycle &mdash; assessment, prioritization, execution, measurement &mdash; run every month, reported honestly.</p>
					<ul class="pricing-features">
						<li><i class="ri-check-line"></i>Monthly assessment &amp; honest reporting</li>
						<li><i class="ri-check-line"></i>Prioritized execution every cycle</li>
						<li><i class="ri-check-line"></i>Technical, content &amp; authority work</li>
						<li><i class="ri-check-line"></i>Responses within 24 hours</li>
						<li><i class="ri-check-line"></i>Optional website support add-on</li>
					</ul>
					<a href="<?= site_url('contact') ?>" class="btn btn-primary">Get Your Plan</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="pricing-card fadeInUp" data-delay="0.3">
					<h4>Enterprise &amp; White Label</h4>
					<div class="pricing-price">Custom<span class="pricing-cadence">scoped</span></div>
					<p class="pricing-desc">Large sites, multi-market rollouts, and agency fulfillment &mdash; governed, templated, and white-labeled.</p>
					<ul class="pricing-features">
						<li><i class="ri-check-line"></i>Governance across thousands of pages</li>
						<li><i class="ri-check-line"></i>Multi-market &amp; multilingual campaigns</li>
						<li><i class="ri-check-line"></i>White-label delivery under your brand</li>
						<li><i class="ri-check-line"></i>Volume pricing for agencies</li>
					</ul>
					<a href="<?= site_url('contact') ?>" class="btn btn-dark">Discuss Scope</a>
				</div>
			</div>
		</div>
		<p class="text-center pricing-note fadeInUp" data-delay="0.2">Pricing follows the work, never a package tier. Start with a <a href="<?= site_url('audit') ?>">free SEO audit</a> and we&rsquo;ll quote the scope your site actually needs.</p>
	</div>
</section>
<!-- ========== END PRICING ========== -->

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
					<h2>Still have a question? Let's talk.</h2>
					<a href="<?= site_url('contact') ?>" class="btn btn-dark mb-2">Get a free assessment</a>
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

<!-- ========== CTA ========== -->
<section class="section">
	<div class="container">
		<div class="cta-band fadeInUp" data-delay="0.1">
			<div class="row align-items-center">
				<div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
					<h2>Ready to See Where You Stand?</h2>
					<p>If you're comparing SEO consulting services or trying to figure out what's actually holding your site back, start with an assessment rather than a sales pitch. We&rsquo;ll show you the five fixes that matter most.</p>
				</div>
				<div class="col-lg-5 col-md-12 text-lg-right">
					<a href="<?= site_url('contact') ?>" class="btn btn-white">Get a Free SEO Assessment</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== END CTA ========== -->

<?php require __DIR__ . '/includes/footer.php'; ?>