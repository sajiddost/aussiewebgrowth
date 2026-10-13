<?php
// =========================================================
// 404 — Page not found
// =========================================================
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/functions.php';

http_response_code(404);

$pageTitle       = 'Page Not Found';
$pageDescription = 'The page you are looking for could not be found on ' . SITE_NAME . '.';
$active          = '';
$canonicalPath   = '404';
$metaRobots      = 'noindex, follow';
$ogType          = 'website';

require __DIR__ . '/includes/header.php';
?>

<!-- ========== 404 HERO ========== -->
<section class="page-hero section">
	<div class="container">
		<div class="col-lg-9 col-xs-12 mx-auto text-center fadeInUp" data-delay="0.1">
			<p class="pill"><i class="ri-error-warning-line"></i>404 Error</p>
			<h1 style="font-size:clamp(44px,7vw,84px);line-height:1.05;">Page Not Found</h1>
			<p class="sec-lead mx-auto" style="max-width:640px;">The page you&rsquo;re looking for doesn&rsquo;t exist, has moved, or never lived here. No problem &mdash; here&rsquo;s how to find what you need.</p>
			<div class="svc-kicker-row justify-content-center">
				<a href="<?= site_url('') ?>" class="btn btn-primary"><i class="ri-home-5-line"></i> Back to Home</a>
				<a href="<?= site_url('') ?>#services" class="btn btn-dark">Explore Services</a>
				<a href="<?= site_url('contact') ?>" class="btn btn-dark">Contact Us</a>
			</div>
		</div>
	</div>
</section>
<!-- ========== END 404 HERO ========== -->

<!-- ========== QUICK LINKS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<p class="pill"><i class="ri-compass-3-line"></i>Keep exploring</p>
			<h2 class="sec-title">Popular <span>Destinations</span></h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<a class="industry-card fadeInUp" href="<?= site_url('') ?>#services" data-delay="0.1">
					<div class="industry-icon"><i class="ri-window-2-line"></i></div>
					<h4>SEO Services</h4>
					<p>Technical audits, content, link building, AI search, and ongoing programs &mdash; all of it, in one place.</p>
					<span class="industry-link">Browse services <i class="ri-arrow-right-s-line"></i></span>
				</a>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<a class="industry-card fadeInUp" href="<?= site_url('audit') ?>" data-delay="0.2">
					<div class="industry-icon"><i class="ri-file-search-line"></i></div>
					<h4>Free Automated Audit</h4>
					<p>Get a free, automated snapshot of your site&rsquo;s technical health and where the leaks are.</p>
					<span class="industry-link">Run the audit <i class="ri-arrow-right-s-line"></i></span>
				</a>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<a class="industry-card fadeInUp" href="<?= site_url('blog') ?>" data-delay="0.3">
					<div class="industry-icon"><i class="ri-book-open-line"></i></div>
					<h4>Blog &amp; Guides</h4>
					<p>Honest, useful guides on how SEO actually works &mdash; and what it really costs.</p>
					<span class="industry-link">Read the blog <i class="ri-arrow-right-s-line"></i></span>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- ========== END QUICK LINKS ========== -->

<!-- ========== CTA ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="cta-band fadeInUp" data-delay="0.1">
			<div class="row align-items-center">
				<div class="col-lg-8 col-md-12 mb-4 mb-lg-0">
					<h2>Still stuck? Just ask.</h2>
					<p>If you were expecting to find a page here, tell us what you were looking for and we&rsquo;ll point you in the right direction &mdash; or email us directly at <a href="mailto:<?= e(CONTACT_EMAIL) ?>" style="color:#fff;text-decoration:underline;"><?= e(CONTACT_EMAIL) ?></a>.</p>
				</div>
				<div class="col-lg-4 col-md-12 text-lg-right">
					<a href="<?= site_url('contact') ?>" class="btn btn-white mb-2">Get a Free Assessment</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== END CTA ========== -->

<?php require __DIR__ . '/includes/footer.php';