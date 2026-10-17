<?php
// =========================================================
// Storage + Notification helpers (JSONL / JSON files)
// =========================================================
require_once __DIR__ . '/../config.php';

// ---------------- JSONL (leads) ----------------

function read_leads(): array
{
    if (!is_file(LEADS_FILE)) {
        return [];
    }
    $leads = [];
    $lines = file(LEADS_FILE, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines ?: [] as $line) {
        $data = json_decode($line, true);
        if (is_array($data)) {
            $leads[] = $data;
        }
    }
    return $leads;
}

function append_lead(array $lead): bool
{
    if (!is_dir(DATA_DIR)) {
        mkdir(DATA_DIR, 0775, true);
    }
    $line = json_encode($lead, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    return (bool)@file_put_contents(LEADS_FILE, $line . PHP_EOL, FILE_APPEND | LOCK_EX);
}

function delete_lead(string $id): bool
{
    if (!is_file(LEADS_FILE)) {
        return false;
    }
    $lines = file(LEADS_FILE, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $remaining = array_filter($lines ?: [], function ($line) use ($id) {
        $data = json_decode($line, true);
        return !is_array($data) || ($data['id'] ?? '') !== $id;
    });
    $content = implode(PHP_EOL, $remaining);
    if ($remaining) {
        $content .= PHP_EOL;
    }
    return (bool)@file_put_contents(LEADS_FILE, $content, LOCK_EX);
}

function update_lead_processed(string $id, bool $processed): bool
{
    if (!is_file(LEADS_FILE)) {
        return false;
    }
    $lines = file(LEADS_FILE, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $found = false;
    $out = [];
    foreach ($lines ?: [] as $line) {
        $data = json_decode($line, true);
        if (is_array($data) && ($data['id'] ?? '') === $id) {
            $data['processed'] = $processed;
            $found = true;
        }
        $out[] = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
    if (!$found) {
        return false;
    }
    return (bool)@file_put_contents(LEADS_FILE, implode(PHP_EOL, $out) . PHP_EOL, LOCK_EX);
}

// ---------------- JSON (blogs) ----------------

function read_blogs(): array
{
    if (!is_file(BLOGS_FILE)) {
        return [];
    }
    $data = json_decode((string)file_get_contents(BLOGS_FILE), true);
    return is_array($data) ? $data : [];
}

function find_blog(string $slug): ?array
{
    foreach (read_blogs() as $post) {
        if (($post['slug'] ?? '') === $slug) {
            return $post;
        }
    }
    return null;
}

// ---------------- JSON (live chat) ----------------

function chat_read(): array
{
    if (!is_file(CHATS_FILE)) {
        return [];
    }
    $data = json_decode((string)file_get_contents(CHATS_FILE), true);
    return is_array($data) ? $data : [];
}

// Atomic read-modify-write on the chats file. The callback receives the
// conversations array BY REFERENCE and may mutate it; its return value is
// passed straight back to the caller.
function chat_transaction(callable $mutate)
{
    if (!is_dir(DATA_DIR)) {
        mkdir(DATA_DIR, 0775, true);
    }
    $fp = @fopen(CHATS_FILE, 'c+');
    if (!$fp) {
        return null;
    }
    flock($fp, LOCK_EX);
    $chats = json_decode((string)stream_get_contents($fp), true);
    if (!is_array($chats)) {
        $chats = [];
    }
    $result = $mutate($chats);
    rewind($fp);
    ftruncate($fp, 0);
    fwrite($fp, (string)json_encode($chats, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
    fflush($fp);
    flock($fp, LOCK_UN);
    fclose($fp);
    return $result;
}

function chat_create(string $name, string $email, string $page): string
{
    $id = uniqid('chat_', true);
    chat_transaction(function (&$chats) use ($id, $name, $email, $page) {
        $chats[$id] = [
            'id'                 => $id,
            'name'               => $name,
            'email'              => $email,
            'page'               => $page,
            'ip'                 => $_SERVER['REMOTE_ADDR'] ?? '',
            'user_agent'         => $_SERVER['HTTP_USER_AGENT'] ?? '',
            'messages'           => [],
            'unread_admin'       => 0,
            'unread_visitor'     => 0,
            'created_at'         => date('c'),
            'updated_at'         => date('c'),
            'last_seen_visitor_at' => date('c'),
            'last_seen_admin_at'   => null,
            'typing_visitor_at'    => null,
            'typing_admin_at'      => null,
        ];
    });
    return $id;
}

function chat_find(string $id): ?array
{
    $chats = chat_read();
    return $chats[$id] ?? null;
}

function chat_add_message(string $id, string $from, string $text): bool
{
    $ok = false;
    chat_transaction(function (&$chats) use ($id, $from, $text, &$ok) {
        if (!isset($chats[$id])) {
            return;
        }
        $chats[$id]['messages'][] = [
            'from' => $from,
            'text' => $text,
            'at'   => date('c'),
        ];
        $chats[$id]['updated_at'] = date('c');
        if ($from === 'admin') {
            $chats[$id]['unread_visitor'] = (int)($chats[$id]['unread_visitor'] ?? 0) + 1;
            $chats[$id]['last_seen_admin_at'] = date('c');
        } elseif ($from === 'visitor') {
            $chats[$id]['unread_admin'] = (int)($chats[$id]['unread_admin'] ?? 0) + 1;
            $chats[$id]['last_seen_visitor_at'] = date('c');
        }
        $ok = true;
    });
    return $ok;
}

function chat_mark_read(string $id, string $who): bool
{
    $ok = false;
    chat_transaction(function (&$chats) use ($id, $who, &$ok) {
        if (!isset($chats[$id])) {
            return;
        }
        if ($who === 'admin') {
            $chats[$id]['unread_admin'] = 0;
        } else {
            $chats[$id]['unread_visitor'] = 0;
        }
        $ok = true;
    });
    return $ok;
}

function chat_delete(string $id): bool
{
    $ok = false;
    chat_transaction(function (&$chats) use ($id, &$ok) {
        if (isset($chats[$id])) {
            unset($chats[$id]);
            $ok = true;
        }
    });
    return $ok;
}

// Presence and typing helpers
function chat_update_presence(string $id, string $who): void
{
    chat_transaction(function (&$chats) use ($id, $who) {
        if (!isset($chats[$id])) {
            return;
        }
        $now = date('c');
        if ($who === 'admin') {
            $chats[$id]['last_seen_admin_at'] = $now;
        } elseif ($who === 'visitor') {
            $chats[$id]['last_seen_visitor_at'] = $now;
        }
    });
}

function chat_set_typing(string $id, string $who, bool $typing): void
{
    chat_transaction(function (&$chats) use ($id, $who, $typing) {
        if (!isset($chats[$id])) {
            return;
        }
        $now = date('c');
        if ($who === 'admin') {
            $chats[$id]['typing_admin_at'] = $typing ? $now : null;
        } elseif ($who === 'visitor') {
            $chats[$id]['typing_visitor_at'] = $typing ? $now : null;
        }
    });
}

function chat_is_online(string $id, string $who, int $thresholdSec = 15): bool
{
    $chat = chat_find($id);
    if (!$chat) {
        return false;
    }
    $key = $who === 'admin' ? 'last_seen_admin_at' : 'last_seen_visitor_at';
    $ts  = strtotime((string)($chat[$key] ?? ''));
    if (!$ts) {
        return false;
    }
    return (time() - $ts) <= $thresholdSec;
}

// ---------------- Notifications ----------------

function send_lead_notification(array $lead): bool
{
    $site   = SITE_NAME;
    $to     = NOTIFY_EMAIL;
    $subject = "New lead via the {$site} contact form";

    $message  = "A new lead was submitted through the {$site} website.\r\n";
    $message .= "---------------------------------------------\r\n";
    $message .= "Name:     {$lead['name']}\r\n";
    $message .= "Email:    {$lead['email']}\r\n";
    if (!empty($lead['phone']))    { $message .= "Phone:    {$lead['phone']}\r\n"; }
    if (!empty($lead['company'])) { $message .= "Company:  {$lead['company']}\r\n"; }
    if (!empty($lead['subject']))  { $message .= "Subject:  {$lead['subject']}\r\n"; }
    if (!empty($lead['budget']))   { $message .= "Budget:   {$lead['budget']}\r\n"; }
    $message .= "---------------------------------------------\r\n";
    $message .= "Message:\r\n{$lead['message']}\r\n";

    $host    = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $replier = str_replace(["\r", "\n"], '', $lead['name']);
    $replyTo = str_replace(["\r", "\n"], '', $lead['email']);
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "From: {$site} <no-reply@{$host}>\r\n";
    $headers .= "Reply-To: {$replier} <{$replyTo}>\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

    try {
        $ok = @mail($to, $subject, $message, $headers);
    } catch (Throwable $e) {
        $ok = false;
    }

    // Record the attempt so nothing is silently lost on local setups.
    $log  = date('c') . ' | ' . $to . ' | ' . ($ok ? 'OK' : 'FAILED') . ' | ' . $lead['email'] . PHP_EOL;
    @file_put_contents(storage_path('notifications.log'), $log, FILE_APPEND | LOCK_EX);

    return $ok;
}

// ---------------- Misc ----------------

function paginate(array $items, int $perPage, int $page): array
{
    $total   = count($items);
    $pages   = max(1, (int)ceil($total / $perPage));
    $page    = max(1, min($page, $pages));
    $offset  = ($page - 1) * $perPage;
    return [
        'items'   => array_slice($items, $offset, $perPage),
        'total'   => $total,
        'pages'   => $pages,
        'page'    => $page,
        'perPage' => $perPage,
    ];
}