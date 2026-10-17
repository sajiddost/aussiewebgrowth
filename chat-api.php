<?php
// =========================================================
// Live chat API — visitor widget + admin dashboard
// JSON over POST/GET. Storage lives in data/chats.json.
// =========================================================
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/functions.php';

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');
header('Cache-Control: no-store');

function json_out(array $data): void
{
    echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

// Chat text is stored raw and only ever rendered with textContent on the
// client, so it is never HTML-escaped here (escaping would double up).
function chat_text(string $value, int $max): string
{
    $value = trim(str_replace(["\r\n", "\r"], "\n", $value));
    $value = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/u', '', $value) ?? '';
    if (mb_strlen($value) > $max) {
        $value = mb_substr($value, 0, $max);
    }
    return $value;
}

function chat_public_messages(array $chat): array
{
    $out = [];
    foreach ($chat['messages'] ?? [] as $m) {
        $from = (string)($m['from'] ?? '');
        // Historical auto-bot messages are hidden — the chat is human-only now.
        if ($from === 'bot') {
            continue;
        }
        if ($from !== 'admin' && $from !== 'visitor') {
            $from = 'visitor';
        }
        $out[] = [
            'from' => $from,
            'text' => (string)($m['text'] ?? ''),
            'at'   => (string)($m['at'] ?? ''),
        ];
    }
    return $out;
}

// Presence helper: is anyone watching this conversation right now?
function chat_presence(array $chat): array
{
    $now  = time();
    $seen = function (string $key, int $sec) use ($chat, $now) {
        $t = strtotime((string)($chat[$key] ?? ''));
        return $t && ($now - $t) <= $sec;
    };
    $typing = function (string $key) use ($chat, $now) {
        $t = strtotime((string)($chat[$key] ?? ''));
        return $t && ($now - $t) < 7;
    };
    return [
        'visitor_online' => $seen('last_seen_visitor_at', 15),
        'admin_online'   => $seen('last_seen_admin_at', 15),
        'typing_visitor' => $typing('typing_visitor_at'),
        'typing_admin'   => $typing('typing_admin_at'),
    ];
}

$isAdmin = ($_SESSION['admin_logged_in'] ?? false) === true;
$action  = (string)($_POST['action'] ?? $_GET['action'] ?? '');

// ---------------- Visitor actions ----------------

if ($action === 'init') {
    $id   = (string)($_SESSION['chat_id'] ?? '');
    $chat = $id !== '' ? chat_find($id) : null;
    if (!$chat) {
        json_out(['ok' => true, 'has_chat' => false]);
    }
    chat_update_presence($id, 'visitor');
    $chat = chat_find($id) ?? $chat;
    json_out([
        'ok'       => true,
        'has_chat' => true,
        'unread'   => (int)($chat['unread_visitor'] ?? 0),
        'messages' => chat_public_messages($chat),
        'presence' => chat_presence($chat),
    ]);
}

if ($action === 'start') {
    $existing = (string)($_SESSION['chat_id'] ?? '');
    if ($existing !== '' && ($chat = chat_find($existing))) {
        json_out(['ok' => true, 'has_chat' => true, 'messages' => chat_public_messages($chat)]);
    }
    $name  = chat_text((string)($_POST['name'] ?? ''), 80);
    $email = chat_text((string)($_POST['email'] ?? ''), 120);
    if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email = '';
    }
    $id = chat_create($name, $email, chat_text((string)($_POST['page'] ?? ''), 200));
    $_SESSION['chat_id'] = $id;
    json_out(['ok' => true, 'has_chat' => true, 'messages' => []]);
}

if ($action === 'send') {
    $id   = (string)($_SESSION['chat_id'] ?? '');
    $chat = $id !== '' ? chat_find($id) : null;
    if (!$chat) {
        json_out(['ok' => false, 'error' => 'no_chat']);
    }
    $text = chat_text((string)($_POST['message'] ?? ''), 1000);
    if ($text === '') {
        json_out(['ok' => false, 'error' => 'empty']);
    }
    // Light flood control: one message per second per session.
    $now = time();
    if (isset($_SESSION['chat_last']) && $now - (int)$_SESSION['chat_last'] < 1) {
        json_out(['ok' => false, 'error' => 'slow']);
    }
    $_SESSION['chat_last'] = $now;

    chat_add_message($id, 'visitor', $text);
    chat_set_typing($id, 'visitor', false);
    chat_update_presence($id, 'visitor');
    $chat = chat_find($id) ?? [];
    json_out([
        'ok'       => true,
        'messages' => chat_public_messages($chat),
        'presence' => chat_presence($chat),
    ]);
}

// Visitor presence / typing heartbeat
if ($action === 'typing') {
    $id = (string)($_SESSION['chat_id'] ?? '');
    if ($id === '' || !chat_find($id)) {
        json_out(['ok' => false, 'error' => 'no_chat']);
    }
    $typing = ($_POST['typing'] ?? '0') === '1';
    chat_set_typing($id, 'visitor', $typing);
    chat_update_presence($id, 'visitor');
    json_out(['ok' => true]);
}

if ($action === 'poll') {
    $id   = (string)($_SESSION['chat_id'] ?? '');
    $chat = $id !== '' ? chat_find($id) : null;
    if (!$chat) {
        json_out(['ok' => true, 'has_chat' => false]);
    }
    chat_update_presence($id, 'visitor');
    $chat = chat_find($id) ?? $chat;
    if ((int)($chat['unread_visitor'] ?? 0) > 0) {
        chat_mark_read($id, 'visitor');
    }
    json_out([
        'ok'       => true,
        'has_chat' => true,
        'messages' => chat_public_messages($chat),
        'presence' => chat_presence($chat),
    ]);
}

if ($action === 'check') {
    $id   = (string)($_SESSION['chat_id'] ?? '');
    $chat = $id !== '' ? chat_find($id) : null;
    if (!$chat) {
        json_out(['ok' => true, 'has_chat' => false]);
    }
    chat_update_presence($id, 'visitor');
    $chat = chat_find($id) ?? $chat;
    json_out([
        'ok'       => true,
        'has_chat' => true,
        'unread'   => (int)($chat['unread_visitor'] ?? 0),
        'presence' => chat_presence($chat),
    ]);
}

// ---------------- Admin actions ----------------

if (in_array($action, ['admin_list', 'admin_thread', 'admin_send', 'admin_delete', 'admin_typing'], true)) {
    if (!$isAdmin) {
        json_out(['ok' => false, 'error' => 'auth']);
    }

    if ($action === 'admin_typing') {
        $id = (string)($_POST['id'] ?? '');
        if (!chat_find($id)) {
            json_out(['ok' => false, 'error' => 'not_found']);
        }
        chat_set_typing($id, 'admin', ($_POST['typing'] ?? '0') === '1');
        chat_update_presence($id, 'admin');
        json_out(['ok' => true]);
    }

    if ($action === 'admin_list') {
        $chats = chat_read();
        uasort($chats, function ($a, $b) {
            return strcmp((string)($b['updated_at'] ?? ''), (string)($a['updated_at'] ?? ''));
        });
        $list = [];
        foreach ($chats as $id => $c) {
            $c['id'] = $id;
            $msgs = is_array($c['messages'] ?? null) ? $c['messages'] : [];
            $last = $msgs ? end($msgs) : null;
            $pres = chat_presence($c);
            $list[] = [
                'id'         => (string)$id,
                'name'       => (string)($c['name'] ?? ''),
                'email'      => (string)($c['email'] ?? ''),
                'page'       => (string)($c['page'] ?? ''),
                'updated_at' => (string)($c['updated_at'] ?? ($c['created_at'] ?? '')),
                'unread'     => (int)($c['unread_admin'] ?? 0),
                'count'      => count($c['messages'] ?? []),
                'preview'    => $last ? mb_substr((string)($last['text'] ?? ''), 0, 90) : '',
                'online'     => $pres['visitor_online'],
                'typing'     => $pres['typing_visitor'],
            ];
        }
        json_out(['ok' => true, 'chats' => $list]);
    }

    if ($action === 'admin_thread') {
        $id   = (string)($_GET['id'] ?? $_POST['id'] ?? '');
        $chat = $id !== '' ? chat_find($id) : null;
        if (!$chat) {
            json_out(['ok' => false, 'error' => 'not_found']);
        }
        chat_update_presence($id, 'admin');
        if ((string)($_GET['read'] ?? '1') !== '0') {
            chat_mark_read($id, 'admin');
        }
        $chat = chat_find($id) ?? $chat;
        json_out([
            'ok'       => true,
            'id'       => $id,
            'name'     => (string)($chat['name'] ?? ''),
            'email'    => (string)($chat['email'] ?? ''),
            'page'     => (string)($chat['page'] ?? ''),
            'messages' => chat_public_messages($chat),
            'presence' => chat_presence($chat),
        ]);
    }

    if ($action === 'admin_send') {
        $id   = (string)($_POST['id'] ?? '');
        $text = chat_text((string)($_POST['message'] ?? ''), 2000);
        if ($text === '') {
            json_out(['ok' => false, 'error' => 'empty']);
        }
        if (!chat_find($id)) {
            json_out(['ok' => false, 'error' => 'not_found']);
        }
        chat_add_message($id, 'admin', $text);
        chat_set_typing($id, 'admin', false);
        chat_mark_read($id, 'admin');
        json_out(['ok' => true, 'messages' => chat_public_messages(chat_find($id) ?? [])]);
    }

    if ($action === 'admin_delete') {
        $id = (string)($_POST['id'] ?? '');
        chat_delete($id);
        json_out(['ok' => true]);
    }
}

json_out(['ok' => false, 'error' => 'unknown_action']);
