<?php
// =========================================================
// AussieWeb Growth Site Configuration (Core PHP, no database)
// =========================================================

session_start();

// ---------- Site settings ----------
const SITE_NAME    = 'AussieWeb Growth';
const SITE_TAGLINE = 'SEO That Gets Prioritised, Not Just Recommended';

// Public contact email (shown on the site and used for lead notifications)
const CONTACT_EMAIL = 'info@aussiewebgrowth.com';

// Email used to receive lead notifications
const NOTIFY_EMAIL = 'info@aussiewebgrowth.com';

// Public contact phone and general business location (shown on the site
// and used for Organization/LocalBusiness structured data)
const CONTACT_PHONE     = '+61 480 008 582';
const CONTACT_PHONE_TEL = '+61480008582';
const BUSINESS_LOCALITY = 'Parkwood';
const BUSINESS_REGION   = 'QLD';
const BUSINESS_COUNTRY  = 'AU';

// Admin area credentials. Real values live in config.local.php, which is
// gitignored and must be created on each environment (see
// config.local.example.php for the format) - they must never be committed.
if (file_exists(__DIR__ . '/config.local.php')) {
    require_once __DIR__ . '/config.local.php';
} else {
    // Fallback only, so a fresh checkout without config.local.php still boots.
    // This is NOT safe for production - create config.local.php before going live.
    // (define(), not const - const is compile-time and can't sit inside an if/else.)
    define('ADMIN_USERNAME', 'admin');
    define('ADMIN_PASSWORD', 'change-me-now');
}

// ---------- File storage (JSONL / JSON, no database) ----------
const DATA_DIR      = __DIR__ . '/data';
const LEADS_FILE    = DATA_DIR . '/leads.jsonl';
const BLOGS_FILE    = DATA_DIR . '/blogs.json';
const CHATS_FILE    = DATA_DIR . '/chats.json';

// Blog pagination
const BLOGS_PER_PAGE = 6;

// ---------- Path helpers ----------
// Base URL is the app's own location relative to the web root. Deriving it
// from DOCUMENT_ROOT (not each script's own dirname) keeps URLs identical
// whether the page is at /aussiewebgrowth/index.php or /aussiewebgrowth/admin/leads.php
$docRoot = str_replace('\\', '/', rtrim($_SERVER['DOCUMENT_ROOT'] ?? '', '/\\'));
$appDir  = str_replace('\\', '/', __DIR__);
$baseUrl = '';
if ($docRoot !== '' && stripos($appDir, $docRoot) === 0) {
    $baseUrl = substr($appDir, strlen($docRoot));
}
define('BASE_URL', rtrim($baseUrl, '/\\'));

function site_url(string $path = ''): string
{
    return BASE_URL . '/' . ltrim($path, '/');
}

function file_asset(string $path): string
{
    return site_url($path);
}

function absolute_url(string $path = ''): string
{
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host   = $_SERVER['HTTP_HOST'] ?? 'localhost';
    return $scheme . '://' . $host . BASE_URL . '/' . ltrim($path, '/');
}

function storage_path(string $file = ''): string
{
    return DATA_DIR . '/' . ltrim($file, '/');
}

// ---------- Small helpers used across pages ----------
function clean(string $value): string
{
    return trim(htmlspecialchars(strip_tags($value), ENT_QUOTES, 'UTF-8'));
}

function e(?string $value): string
{
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

function flash(string $key): ?string
{
    if (isset($_SESSION[$key])) {
        $value = $_SESSION[$key];
        unset($_SESSION[$key]);
        return $value;
    }
    return null;
}