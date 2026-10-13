<?php
// =========================================================
// sitemap.xml — dynamic XML sitemap generated from data/blogs.json
// so it stays current when new posts are added.
// =========================================================
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/functions.php';

header('Content-Type: application/xml; charset=UTF-8');

$posts = read_blogs();

// Real last-modified date per page, derived from its own file - not a
// fabricated "today" that would be identical on every crawl regardless
// of whether the page actually changed.
function page_lastmod(string $file): string
{
    $mtime = @filemtime(__DIR__ . '/' . $file);
    return $mtime ? date('Y-m-d', $mtime) : date('Y-m-d');
}

$urls = [
    ['loc' => absolute_url(''),               'lastmod' => page_lastmod('index.php'),        'priority' => '1.0'],
    ['loc' => absolute_url('about'),          'lastmod' => page_lastmod('about.php'),        'priority' => '0.8'],
    ['loc' => absolute_url('contact'),        'lastmod' => page_lastmod('contact.php'),      'priority' => '0.8'],
    ['loc' => absolute_url('seo-services'),   'lastmod' => page_lastmod('seo-services.php'), 'priority' => '0.8'],
    ['loc' => absolute_url('audit'),          'lastmod' => page_lastmod('audit.php'),        'priority' => '0.7'],
];

foreach ($posts as $post) {
    $urls[] = [
        'loc'      => absolute_url($post['slug']),
        'lastmod'  => date('Y-m-d', strtotime($post['date'])),
        'priority' => '0.7',
    ];
}
?>
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $u): ?>
	<url>
		<loc><?= e($u['loc']) ?></loc>
		<lastmod><?= e($u['lastmod']) ?></lastmod>
		<priority><?= e($u['priority']) ?></priority>
	</url>
<?php endforeach; ?>
</urlset>