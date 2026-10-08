<?php
// =========================================================
// Ongoing Website Support — service page
// Unique "health dashboard" layout (no shared layout).
// =========================================================
$service = [
    'slug'        => 'ongoing-website-support',
    'title'       => 'Ongoing Website Support',
    'pill'        => 'Website Support',
    'metaTitle'   => 'Ongoing Website Support — Development, Monitoring & Maintenance | HelloSuggest',
    'metaDesc'    => 'A recurring web development service: updates, security patches, bug fixes, backups, and performance monitoring — tested in staging, reported monthly, responded to within 24 hours.',
    'h1'          => 'Ongoing Website Support That Keeps Your Site Healthy After Launch',
    'lead'        => 'A website is a piece of software, and it doesn&rsquo;t run itself after launch. Ongoing Website Support is a recurring web development service: we monitor your site&rsquo;s code, hosting, and performance, apply updates and security patches, fix bugs as they appear, and handle the small technical work that keeps a site running smoothly month after month.',
    'image'       => 'assets/img/service/ongoing-website-support.webp',
    'imageAlt'    => 'Ongoing website support - monitoring, maintenance, fixes, and monthly reporting',
    'related'     => ['seo-management', 'technical-seo-audits', 'white-label-seo'],

    'intro' => [
        'A website is a piece of software, and like any software, it doesn&rsquo;t run itself after launch. Ongoing Website Support is a recurring web development service: we monitor your site&rsquo;s code, hosting, and performance, apply updates and security patches, fix bugs as they appear, and handle the small technical work that keeps a site running smoothly month after month &mdash; so you&rsquo;re not stuck choosing between hiring a full-time developer or letting the site quietly degrade.',
        'If your site launched months or years ago and nobody has touched the code since, this page covers what we actually do, what typically breaks without maintenance, and how the engagement is structured.',
    ],

    'split' => [
        'kicker'    => 'Monitor & Maintain & Fix & Report',
        'lead'      => 'This is a web development service first. If it also happens to keep your SEO in good shape &mdash; and it does, because a fast, error-free, crawlable site is a prerequisite for ranking well &mdash; that&rsquo;s a byproduct of doing the development work properly, not the main point.',
        'image'     => 'assets/img/service/technical-health-monitoring.webp',
        'imageAlt'  => 'A dedicated team watching your site after launch',
        'points'    => [
            ['icon' => 'ri-refresh-line', 'title' => 'Software and platform updates', 'text' => 'CMS core files, plugins, themes, and third-party libraries kept current, tested in a staging environment first so an update doesn&rsquo;t break something else on your live site.'],
            ['icon' => 'ri-shield-check-line', 'title' => 'Security patching and monitoring', 'text' => 'Vulnerability scans, malware checks, firewall rules, login hardening, and SSL certificate management &mdash; closing the gaps that account for most site compromises.'],
            ['icon' => 'ri-bug-line', 'title' => 'Bug fixes', 'text' => 'Broken layouts, JavaScript errors, failed form submissions, checkout issues, and anything else that stops a visitor from doing what they came to do.'],
            ['icon' => 'ri-save-3-line', 'title' => 'Backups and disaster recovery', 'text' => 'Automated, verified backups on a regular schedule, with a tested restore process &mdash; so a bad update, a hosting failure, or an attack means a rollback, not a rebuild from scratch.'],
        ],
        'matters'   => [
            ['icon' => 'ri-flask-line', 'title' => 'Tested before it ships', 'text' => 'Every change is verified in staging before it touches your live site, so updates don&rsquo;t turn into outages.'],
            ['icon' => 'ri-calendar-check-line', 'title' => 'A cycle, not a cleanup', 'text' => 'A monthly cycle of monitoring, maintenance, fixes, and reporting &mdash; not a one-off cleanup that leaves the site degrading again.'],
            ['icon' => 'ri-search-line', 'title' => 'SEO rides along', 'text' => 'A fast, error-free, crawlable site is a prerequisite for ranking well. It&rsquo;s a byproduct of good development work, not the main point.'],
        ],
    ],

    'symptoms' => [
        ['icon' => 'ri-shield-user-line', 'title' => 'Outdated software and hacks', 'text' => 'An unpatched CMS or plugin isn&rsquo;t a hypothetical risk &mdash; it&rsquo;s the standard entry point for automated attacks on small business sites.'],
        ['icon' => 'ri-puzzle-2-line', 'title' => 'Plugin and library conflicts', 'text' => 'An update to one component breaks something unrelated, and it often isn&rsquo;t obvious until a visitor reports it.'],
        ['icon' => 'ri-speed-line', 'title' => 'Performance decay', 'text' => 'Heavier images, added scripts, and new integrations slow a site down gradually until load times and responsiveness noticeably suffer.'],
        ['icon' => 'ri-plug-line', 'title' => 'Broken integrations', 'text' => 'A payment processor updates its API, a CRM changes its webhook format, and the connection silently stops working.'],
        ['icon' => 'ri-server-line', 'title' => 'Hosting and server drift', 'text' => 'Resource limits get hit, databases go unoptimized, and a site that was fast at launch gets sluggish as data accumulates.'],
        ['icon' => 'ri-device-line', 'title' => 'Cross-browser breakage', 'text' => 'A change that looks fine in the browser someone tested slowly stops rendering correctly somewhere else.'],
        ['icon' => 'ri-stack-line', 'title' => 'Accumulating technical debt', 'text' => 'Fast fixes pile up without cleanup, and eventually even simple changes become risky because nobody fully understands what depends on what.'],
        ['icon' => 'ri-error-warning-line', 'title' => 'Silent failures', 'text' => 'Broken forms, failed checkouts, and dead integrations often produce no error message a business owner would ever see &mdash; they just quietly stop converting.'],
    ],

    'sections' => [
        [
            'heading' => 'Why a Launched Website Still Needs a Developer Watching It',
            'paras'   => [
                'A website isn&rsquo;t finished code the day it goes live. Browsers push updates, hosting environments patch their systems, CMS platforms and plugins release new versions, and third-party services change their APIs &mdash; all of it happening around your site whether anyone touches it or not. A site that gets edited or extended regularly changes even faster, and every update is a chance for something to break quietly.',
                'The usual outcome is a business noticing a problem &mdash; downtime, a drop in leads, a security warning &mdash; with no idea how long it&rsquo;s actually been happening.',
            ],
        ],
        [
            'heading' => 'What We Actually Do Every Month',
            'points'  => [
                ['icon' => 'ri-line-chart-line', 'title' => 'Uptime and performance monitoring', 'text' => 'Server response times, downtime alerts, and page speed tracked continuously, with load-time issues diagnosed at the code level, not just flagged.'],
                ['icon' => 'ri-database-2-line', 'title' => 'Hosting and server management', 'text' => 'Server resource monitoring, database optimization, caching configuration, and coordination with your hosting provider when something at the infrastructure level needs attention.'],
                ['icon' => 'ri-macbook-line', 'title' => 'Cross-browser and mobile QA', 'text' => 'Regular checks that the site renders and functions correctly across browsers and devices, catching the kind of breakage that only shows up on one screen size or one browser.'],
                ['icon' => 'ri-edit-2-line', 'title' => 'Small feature work and content updates', 'text' => 'New pages, updated forms, minor design tweaks, and content changes handled as part of the retainer instead of becoming a separate project every time.'],
                ['icon' => 'ri-exchange-funds-line', 'title' => 'Third-party integrations kept working', 'text' => 'CRM syncs, payment gateways, booking tools, analytics tags, and marketing platforms checked so they keep firing correctly after updates on either end.'],
                ['icon' => 'ri-brush-line', 'title' => 'Code quality and technical debt cleanup', 'text' => 'Legacy code, redundant scripts, and quick fixes stacked over time cleaned up gradually, so the codebase stays maintainable instead of harder to touch every year.'],
            ],
        ],
        [
            'heading' => 'Who This Is For',
            'points'  => [
                ['icon' => 'ri-store-line', 'title' => 'Small businesses without a developer', 'text' => 'You don&rsquo;t need a full-time hire to keep a site properly maintained &mdash; you need someone checking in on a schedule.'],
                ['icon' => 'ri-user-unfollow-line', 'title' => 'Businesses that lost touch with their developer', 'text' => 'Once a freelancer or agency delivers a launch, ongoing maintenance is rarely part of the deal. This fills that gap.'],
                ['icon' => 'ri-file-question-line', 'title' => 'Teams that inherited a site nobody understands', 'text' => 'We assess what&rsquo;s actually there before making changes, so maintenance doesn&rsquo;t turn into guesswork.'],
                ['icon' => 'ri-timer-flash-line', 'title' => 'Sites carrying years of unaddressed updates', 'text' => 'If it&rsquo;s been a while since anyone touched the plugins or core software, this is usually where an engagement starts.'],
                ['icon' => 'ri-user-star-line', 'title' => 'Agencies that need dev support for client sites', 'text' => 'We provide white-labeled ongoing maintenance so you can offer it without staffing it yourself.'],
            ],
        ],
    ],

    'faqs' => [
        ['q' => 'What is Ongoing Website Support?', 'a' => 'A recurring web development service where we monitor, update, secure, and fix your website on a regular schedule &mdash; instead of you needing to hire a developer only when something breaks.'],
        ['q' => 'Is this the same as SEO services?', 'a' => 'No. This is development and maintenance work &mdash; code, security, performance, uptime. We do keep an eye on technical factors that affect search visibility as part of the work, but dedicated SEO strategy is a separate service.'],
        ['q' => 'Do you work with WordPress, Shopify, and custom-built sites?', 'a' => 'Yes, all three. The tools and specifics change by platform; the standard of care doesn&rsquo;t.'],
        ['q' => 'What happens if something breaks between scheduled maintenance?', 'a' => 'You reach out and we respond within 24 hours. Urgent issues &mdash; site down, security breach, broken checkout &mdash; get prioritized immediately.'],
        ['q' => 'Can you take over maintenance on a site another developer built?', 'a' => 'Yes. We start with an assessment of the existing codebase before making any changes, so we understand what we&rsquo;re working with.'],
        ['q' => 'Do you handle small feature requests, or only fixes?', 'a' => 'Both. Minor updates, new pages, and small feature additions are typically included; larger builds are scoped separately.'],
        ['q' => 'Can I start with a one-time site audit before committing to ongoing support?', 'a' => 'Yes &mdash; many clients start there to see the current state of the site before moving into a recurring engagement.'],
    ],

    'ctaTitle' => 'Start With a Site Assessment',
    'ctaLead'  => 'If your site launched a while ago and nobody has touched the code since, start with an assessment instead of a sales pitch. We&rsquo;ll review your platform, plugins and dependencies, hosting setup, and any existing issues &mdash; and show you what actually needs fixing first.',
];

require __DIR__ . '/_page-head.php';
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
				<span class="svc-kicker"><i class="ri-radar-line"></i>Monitor</span>
				<span class="svc-kicker"><i class="ri-tools-line"></i>Maintain</span>
				<span class="svc-kicker"><i class="ri-bug-line"></i>Fix</span>
				<span class="svc-kicker"><i class="ri-file-chart-line"></i>Report</span>
			</div>
		</div>
	</div>
</section>

<!-- ========== INTRO ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-intro fadeInUp" data-delay="0.1">
			<?php foreach ($service['intro'] as $p): ?>
				<p><?= $p ?></p>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ========== IMAGE BAND 1: WHAT IT MEANS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0 fadeInUp" data-delay="0.1">
				<div class="svc-media-figure">
					<img src="<?= site_url('assets/img/service/ongoing-website-support.webp') ?>" alt="A developer is watching your site&rsquo;s health after launch" loading="lazy">
					<span class="svc-media-badge"><i class="ri-heart-pulse-line"></i>Watched after launch</span>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 fadeInUp" data-delay="0.2">
				<div class="svc-section" style="text-align:left;margin:0;">
					<h2 class="svc-section-title" style="text-align:left;margin-bottom:14px;">What Is Ongoing Website <span style="color:var(--primary-color);">Support?</span></h2>
					<p>Ongoing Website Support means a developer is watching your site after launch &mdash; not just when something breaks. We handle the routine work every website needs: keeping software up to date, patching security holes, fixing bugs, monitoring uptime and speed, managing backups, and making small improvements as your site and business change.</p>
					<p>Most businesses only think about their site&rsquo;s code when something visibly fails &mdash; a broken form, a page that won&rsquo;t load, a plugin update that takes the whole site down. By then, the underlying issue has usually existed for weeks or months. Ongoing support catches that work before it becomes an emergency.</p>
					<p class="mt-4 mb-0"><strong style="color:var(--black-100);">This is a web development service first</strong> &mdash; if it also keeps your SEO in good shape, that&rsquo;s a byproduct of doing the development work properly, not the main point.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== HEALTH STATS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-stats">
			<div class="stat-box fadeInUp" data-delay="0.1"><h4>50 &rarr; 5</h4><p>From fifty flagged technical issues to the five that actually matter this month.</p></div>
			<div class="stat-box fadeInUp" data-delay="0.2"><h4>24 hrs</h4><p>Response to every support request, no exceptions.</p></div>
			<div class="stat-box fadeInUp" data-delay="0.3"><h4>Recurring</h4><p>A monthly cycle of monitoring, maintenance, fixes, and reporting &mdash; not a one-off cleanup.</p></div>
			<div class="stat-box fadeInUp" data-delay="0.4"><h4>Tested</h4><p>Every change verified in staging before it touches your live site.</p></div>
		</div>
	</div>
</section>

<?php $s = $service['split']; ?>
<!-- ========== DARK SPLIT + IMAGE 2 ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="seo-content-wrap fadeInUp" data-delay="0.1">
			<div class="row no-gutters">
				<div class="col-lg-7">
					<div class="seo-content-left">
						<h3 class="pill" style="color:#fff;border-color:rgba(255,255,255,.25);"><i class="<?= e($SERVICES[$service['slug']]['icon']) ?>"></i><?= e($s['kicker']) ?></h3>
						<h2>Keeping the <span style="color:var(--primary-color);">Routine Work Done</span></h2>
						<?php if (!empty($s['lead'])): ?><p class="seo-lead"><?= $s['lead'] ?></p><?php endif; ?>
						<?php foreach ($s['points'] as $pt): ?>
						<div class="seo-feature-item">
							<div class="seo-icon"><i class="<?= e($pt['icon']) ?>"></i></div>
							<div>
								<h3><?= $pt['title'] ?></h3>
								<p><?= $pt['text'] ?></p>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="seo-content-right">
						<img src="<?= site_url('assets/img/service/technical-health-monitoring.webp') ?>" alt="A team keeping your site running smoothly month after month" class="seo-vertical-img" loading="lazy">
						<h3>How we work</h3>
						<?php foreach ($s['matters'] as $m): ?>
						<div class="seo-point">
							<i class="<?= e($m['icon']) ?>"></i>
							<div>
								<strong><?= $m['title'] ?></strong>
								<span><?= $m['text'] ?></span>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== WHAT QUIETLY BREAKS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title"><?= e($service['sections'][0]['heading']) ?></h2>
			<?php foreach ($service['sections'][0]['paras'] as $i => $p): ?>
				<?php if ($i === 0): ?>
					<p><?= $p ?></p>
				<?php endif; ?>
			<?php endforeach; ?>
			<div class="svc-symptoms">
				<?php foreach ($service['symptoms'] as $symptom): ?>
				<div class="svc-symptom">
					<span class="symptom-ic"><i class="<?= e($symptom['icon']) ?>"></i></span>
					<div>
						<h4><?= $symptom['title'] ?></h4>
						<p><?= $symptom['text'] ?></p>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
			<p>Each of these is manageable on its own. Left unattended, they compound.</p>
			<p class="mb-0"><strong style="color:var(--black-100);"><?= $service['sections'][0]['paras'][1] ?></strong></p>
		</div>
	</div>
</section>

<!-- ========== WHAT'S INCLUDED ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title"><?= e($service['sections'][1]['heading']) ?></h2>
			<div class="row">
				<?php foreach ($service['sections'][1]['points'] as $pt): ?>
					<div class="col-lg-4 col-md-6 col-sm-12 px-lg-3 mb-4">
						<div class="feature-card h-100">
							<i class="<?= e($pt['icon']) ?>"></i>
							<h4><?= $pt['title'] ?></h4>
							<p><?= $pt['text'] ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="svc-report">
				<i class="ri-file-chart-line"></i>
				<div>
					<h4>Monthly reporting</h4>
					<p>A clear report on what was updated, what was fixed, current performance and uptime numbers, and what&rsquo;s queued for next month &mdash; not a wall of jargon.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== HOW IT WORKS: THE CYCLE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-refresh-line"></i>How the engagement works</h3>
			<h2 class="sec-title">A Cycle, Not a <span>One-Time Cleanup</span></h2>
			<p class="sec-lead">This runs as a repeating cycle, not a one-off cleanup. The goal is a site that stays healthy month over month instead of degrading until it needs another full rebuild.</p>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.1">
					<div class="step-circle"><i class="ri-search-eye-line"></i><span class="step-num">1</span></div>
					<h4>Assessment</h4>
					<p>We review your current site: the platform, plugins and dependencies, hosting setup, and any existing issues, so we know exactly what we&rsquo;re maintaining before we start.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.2">
					<div class="step-circle"><i class="ri-radar-line"></i><span class="step-num">2</span></div>
					<h4>Monitoring</h4>
					<p>Uptime, performance, security, and error monitoring run continuously in the background, catching problems before they&rsquo;re visible to visitors.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.3">
					<div class="step-circle"><i class="ri-tools-line"></i><span class="step-num">3</span></div>
					<h4>Maintenance and fixes</h4>
					<p>Updates get applied, bugs get fixed, and small requests get handled on a regular schedule, tested in staging before anything goes live.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.4">
					<div class="step-circle"><i class="ri-file-chart-line"></i><span class="step-num">4</span></div>
					<h4>Reporting</h4>
					<p>You get a clear monthly report on what changed, what was fixed, and current site health &mdash; so the work stays visible even when nothing&rsquo;s on fire.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== COMPARE TIERS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-scales-3-line"></i>Pick the level</h3>
			<h2 class="sec-title">Ongoing Support, One-Time Audit, or <span>Full SEO Management?</span></h2>
			<p class="sec-lead">Three different levels of involvement &mdash; the right one depends on where your site sits.</p>
		</div>
		<div class="svc-compare fadeInUp" data-delay="0.15">
			<div class="svc-tier">
				<h3>One-Time Audit</h3>
				<div class="tier-who">Starting point</div>
				<p>A diagnosis and a prioritized fix list, with your team handling the work. Suits a site that needs a clear picture before deciding what to do next.</p>
				<a class="tier-link" href="<?= site_url('technical-seo-audits') ?>">Explore audits <i class="ri-arrow-right-s-line"></i></a>
			</div>
			<div class="svc-tier featured">
				<span class="tier-tag">This service</span>
				<h3>Ongoing Website Support</h3>
				<div class="tier-who">Maintained, not restored</div>
				<p>Someone watching the site after launch &mdash; updating software, patching security, fixing bugs, and handling the routine technical work &mdash; tested in staging and reported monthly.</p>
				<a class="tier-link" href="#faqs">See the FAQs <i class="ri-arrow-down-s-line"></i></a>
			</div>
			<div class="svc-tier">
				<h3>SEO Management</h3>
				<div class="tier-who">The broadest option</div>
				<p>Strategy, execution, and reporting run as one coordinated program, including content direction and authority building on top of ongoing health.</p>
				<a class="tier-link" href="<?= site_url('seo-management') ?>">See SEO management <i class="ri-arrow-right-s-line"></i></a>
			</div>
		</div>
		<p class="sec-lead text-center mt-5 fadeInUp" data-delay="0.2" style="font-weight:600;color:var(--black-100);">Many clients start with an audit, move to ongoing support, and expand from there. We scope every engagement to what your site actually needs.</p>
	</div>
</section>

<!-- ========== PLATFORM SUPPORT ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Support for the <span style="color:var(--primary-color);">Platform You&rsquo;re On</span></h2>
			<p class="svc-section-lead">We work across WordPress, Shopify, and custom-built sites. The tools and specifics change by platform; the standard of care doesn&rsquo;t.</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 px-lg-3 mb-4">
					<div class="feature-card h-100">
						<i class="ri-wordpress-line"></i>
						<h4>WordPress</h4>
						<p>Core, plugin, and theme updates managed without breaking custom functionality; PHP version upgrades handled carefully; conflicts diagnosed at the code level.</p>
						<a class="tier-link" href="<?= site_url('wordpress-seo') ?>" style="margin-top:12px;display:inline-flex;">WordPress SEO <i class="ri-arrow-right-s-line"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 px-lg-3 mb-4">
					<div class="feature-card h-100">
						<i class="ri-shopping-bag-3-line"></i>
						<h4>Shopify</h4>
						<p>App updates, theme customizations, and checkout functionality maintained within Shopify&rsquo;s platform constraints.</p>
						<a class="tier-link" href="<?= site_url('shopify-seo') ?>" style="margin-top:12px;display:inline-flex;">Shopify SEO <i class="ri-arrow-right-s-line"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 px-lg-3 mb-4">
					<div class="feature-card h-100">
						<i class="ri-building-2-line"></i>
						<h4>Custom-built and enterprise</h4>
						<p>Component- and template-level maintenance, staged deployments, and the documentation and governance a larger codebase requires.</p>
						<a class="tier-link" href="<?= site_url('enterprise-seo') ?>" style="margin-top:12px;display:inline-flex;">Enterprise SEO <i class="ri-arrow-right-s-line"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== WHO THIS IS FOR ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title"><?= e($service['sections'][2]['heading']) ?></h2>
			<div class="row">
				<?php foreach ($service['sections'][2]['points'] as $pt): ?>
				<div class="col-lg-4 col-md-6 col-sm-12 px-lg-3 mb-4">
					<div class="feature-card h-100">
						<i class="<?= e($pt['icon']) ?>"></i>
						<h4><?= $pt['title'] ?></h4>
						<p><?= $pt['text'] ?></p>
					</div>
				</div>
				<?php endforeach; ?>
				<div class="col-lg-4 col-md-6 col-sm-12 px-lg-3 mb-4">
					<a class="feature-card h-100" href="<?= site_url('contact') ?>" style="display:flex;flex-direction:column;text-decoration:none;background:rgba(228,2,43,.05);border-color:rgba(228,2,43,.25);">
						<i class="ri-question-line"></i>
						<h4 style="color:var(--black-100);">Not sure which fits?</h4>
						<p>Start with a one-time site audit or assessment. We&rsquo;ll look at the codebase and tell you whether you need ongoing support &mdash; and where to begin.</p>
						<span class="industry-link" style="margin-top:auto;padding-top:18px;opacity:1;transform:none;color:var(--primary-color);font-weight:600;font-size:15px;display:inline-flex;align-items:center;gap:6px;">Get a free assessment <i class="ri-arrow-right-s-line"></i></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== SEO RIDES ALONG + NO PROMISES ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">We Also Keep an <span style="color:var(--primary-color);">Eye on SEO</span></h2>
			<p>Ongoing Website Support is a development service, but a well-maintained site is also a more search-friendly one &mdash; so as part of the work, we keep an eye on the technical factors that affect visibility: broken links, redirect issues, page speed, mobile usability, and whether your site&rsquo;s structured data still matches what&rsquo;s actually on the page.</p>
			<p class="mb-0">If you want SEO handled as its own focused effort &mdash; content strategy, keyword targeting, authority building &mdash; that&rsquo;s a separate service we also offer, and we&rsquo;re happy to scope both together if that&rsquo;s a better fit.</p>
		</div>
		<div class="svc-section fadeInUp" data-delay="0.15">
			<h2 class="svc-section-title">What We <span style="color:var(--primary-color);">Won&rsquo;t Promise</span></h2>
			<p>We won&rsquo;t promise zero downtime, guarantee that every legacy issue can be fixed without any risk, or claim a fixed number of hours will cover every possible request &mdash; scope depends on the condition of the site and what&rsquo;s asked for each month.</p>
			<p class="mb-0">What we do commit to is testing every change before it ships, responding within 24 hours, and being upfront when something is outside the retainer&rsquo;s scope rather than quietly skipping it.</p>
		</div>
	</div>
</section>

<!-- ========== FAQ ========== -->
<section id="faqs" class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-question-answer-line"></i>FAQ</h3>
			<h2 class="sec-title">Frequently Asked <span>Questions</span></h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-12 mb-4">
				<div class="faq-wrap fadeInUp" data-delay="0.2">
					<i class="ri-question-answer-line"></i>
					<h2>Have a different question?</h2>
					<a href="<?= site_url('contact') ?>" class="btn btn-primary mb-2">Get a free assessment</a>
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
			<p class="sec-lead">This service is the starting point for most engagements. These are the areas it expands into.</p>
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
					<a href="<?= site_url('audit') ?>" class="btn btn-white mb-2">Free Automated Audit</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php require __DIR__ . '/../includes/footer.php'; ?>