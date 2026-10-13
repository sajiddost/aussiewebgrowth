<?php
// =========================================================
// Shared header: <head> + sticky navigation
// Accepts (optional): $pageTitle, $pageDescription, $canonicalPath,
// $metaRobots, $prevUrl, $nextUrl, $ogType, $ogImage, $extraSchema
// =========================================================
require_once __DIR__ . '/../config.php';

if (empty($GLOBALS['SERVICES'])) {
    require_once __DIR__ . '/../Pages/_services.php';
}

$pageTitle       = isset($pageTitle) ? $pageTitle : SITE_NAME;
$pageDescription = isset($pageDescription) ? $pageDescription : SITE_TAGLINE;
$active          = isset($active) ? $active : '';
$canonicalPath   = isset($canonicalPath) ? $canonicalPath : '';
$metaRobots      = isset($metaRobots) ? $metaRobots : 'index, follow';
$ogType          = isset($ogType) ? $ogType : 'website';
$ogImage         = isset($ogImage) ? $ogImage : 'assets/img/brands/fav.png';

$isHome    = $active === 'home';
$isBlog    = $active === 'blog';
$isContact = $active === 'contact';

$canonicalUrl = absolute_url($canonicalPath);

// Asset versioning: bust browser + CDN (Cloudflare) caches when a file changes.
$vCss = @filemtime(__DIR__ . '/../assets/css/custom-hellosuggest.css') ?: date('YmdHis');
$vJs  = @filemtime(__DIR__ . '/../assets/js/hellosuggest.js') ?: date('YmdHis');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="<?= e($metaRobots) ?>">
	<meta name="description" content="<?= e($pageDescription) ?>">
	<meta name="author" content="<?= e(SITE_NAME) ?>">
	<meta name="theme-color" content="#022169">
	<title><?= e($pageTitle) ?> | <?= e(SITE_NAME) ?></title>

	<link rel="canonical" href="<?= e($canonicalUrl) ?>">
	<?php if (!empty($prevUrl)): ?><link rel="prev" href="<?= e(absolute_url($prevUrl)) ?>"><?php endif; ?>
	<?php if (!empty($nextUrl)): ?><link rel="next" href="<?= e(absolute_url($nextUrl)) ?>"><?php endif; ?>
	<meta name="google-site-verification" content="fY43AAuIKvy46Kn-IS96CbgDdMpMcNsXX-odo_811ls" />
	
	<!-- Open Graph -->
	<meta property="og:type" content="<?= e($ogType) ?>">
	<meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
	<meta property="og:locale" content="en_AU">
	<meta property="og:title" content="<?= e($pageTitle) ?>">
	<meta property="og:description" content="<?= e($pageDescription) ?>">
	<meta property="og:url" content="<?= e($canonicalUrl) ?>">
	<meta property="og:image" content="<?= e(absolute_url($ogImage)) ?>">

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?= e($pageTitle) ?>">
	<meta name="twitter:description" content="<?= e($pageDescription) ?>">
	<meta name="twitter:image" content="<?= e(absolute_url($ogImage)) ?>">

	<link rel="icon" href="<?= site_url('assets/img/brands/fav.png') ?>" type="image/png">
	<link rel="shortcut icon" href="<?= site_url('assets/img/brands/fav.png') ?>" type="image/png">
	<link rel="apple-touch-icon" href="<?= site_url('assets/img/brands/fav.png') ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php if (!empty($preloadImage)): ?>
	<link rel="preload" as="image" href="<?= e(site_url($preloadImage)) ?>" fetchpriority="high">
	<?php endif; ?>
	<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,500;12..96,600;12..96,700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= site_url('assets/fonts/remixicon.css') ?>">
	<link rel="stylesheet" href="<?= site_url('assets/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= site_url('assets/css/custom-hellosuggest.css') . '?v=' . $vCss ?>">

	<!-- Structured data (Organization + WebSite) -->
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": ["Organization", "ProfessionalService"],
		"name": "<?= e(SITE_NAME) ?>",
		"url": "<?= e(absolute_url('')) ?>",
		"logo": "<?= e(absolute_url('assets/img/logo.png')) ?>",
		"description": "<?= e(SITE_TAGLINE) ?>",
		"email": "<?= e(CONTACT_EMAIL) ?>",
		"telephone": "<?= e(CONTACT_PHONE_TEL) ?>",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "<?= e(BUSINESS_LOCALITY) ?>",
			"addressRegion": "<?= e(BUSINESS_REGION) ?>",
			"addressCountry": "<?= e(BUSINESS_COUNTRY) ?>"
		},
		"areaServed": {
			"@type": "Country",
			"name": "Australia"
		},
		"sameAs": []
	}
	</script>
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "WebSite",
		"name": "<?= e(SITE_NAME) ?>",
		"url": "<?= e(absolute_url('')) ?>",
		"description": "<?= e(SITE_TAGLINE) ?>"
	}
	</script>
	<?= $extraSchema ?? '' ?>
	<meta name="google-site-verification" content="dy91JVJM_jZdN7X5zhh-GhEwJ2xjlX0IDIfdEvWpEHg" />
</head>
<body<?= $active === 'seo-services' ? ' class="seo-services-page"' : '' ?>>

	<!-- ========== Header / Nav ========== -->
	<header id="header" class="site-header">
		<div class="container">
			<div class="header-inner">
				<a href="<?= site_url('') ?>" class="brand" aria-label="<?= e(SITE_NAME) ?>">
					AussieWeb <span>Growth</span>
				</a>

				<div class="header-toggle" id="menu-toggle" aria-label="Toggle menu" aria-expanded="false">
					<i class="ri-menu-line"></i>
				</div>

				<nav id="menu" class="site-nav" aria-label="Main navigation">
					<ul>
<li><a class="menu-link<?= $isHome ? ' active' : '' ?>" href="<?= site_url('') ?>#home">Home</a></li>
						<li><a class="menu-link" href="<?= site_url('') ?>#how">How It Works</a></li>
						<li><a class="menu-link<?= $active === 'seo-services' ? ' active' : '' ?>" href="<?= site_url('seo-services') ?>">SEO Services</a></li>
						<li><a class="menu-link<?= $active === 'about' ? ' active' : '' ?>" href="<?= site_url('about') ?>">About</a></li>
						<li><a class="menu-link<?= $isContact ? ' active' : '' ?>" href="<?= site_url('contact') ?>">Contact</a></li>
					</ul>
				</nav>

				<a href="<?= site_url('contact') ?>" class="btn btn-primary header-cta">Get a Free Assessment</a>
			</div>
		</div>
	</header>
	<!-- ========== End Header ========== -->