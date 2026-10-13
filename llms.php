<?php
// =========================================================
// llms.txt (dynamic, mirrors robots.php so URLs stay correct
// on any host: localhost or production)
// =========================================================
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/functions.php';

header('Content-Type: text/plain; charset=UTF-8');
?>
# <?= SITE_NAME ?>

> <?= SITE_TAGLINE ?>. <?= SITE_NAME ?> builds fast, mobile-first, SEO-ready websites and runs SEO programs for Australian businesses.

<?= SITE_NAME ?> is a web development and SEO services agency working with Australian small businesses, with a focus on practical, prioritised fixes over exhaustive reports.

## Pages

- [Home](<?= absolute_url('') ?>): Web development services overview, pricing, and process.
- [SEO Services](<?= absolute_url('seo-services') ?>): Technical SEO, on-page SEO, AEO & GEO, and ongoing SEO management.
- [About](<?= absolute_url('about') ?>): About the business and how it works.
- [Free SEO Audit](<?= absolute_url('audit') ?>): Free automated technical SEO audit tool.
- [Blog](<?= absolute_url('blog') ?>): Guides on SEO and web development.
- [Contact](<?= absolute_url('contact') ?>): Get a free quote or SEO assessment.

## Contact

<?= CONTACT_EMAIL ?>
