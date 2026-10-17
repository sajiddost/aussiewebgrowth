<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

// Protect admin pages
if (($_SESSION['admin_logged_in'] ?? false) !== true) {
    header('Location: ' . site_url('admin'));
    exit;
}

$chats  = chat_read();
$total  = count($chats);
$unread = 0;
foreach ($chats as $c) {
    $unread += (int)($c['unread_admin'] ?? 0);
}

$quickReplies = [
    "Hi there! Thanks for reaching out to AussieWeb Growth. How can I help you today?",
    "Happy to help with that. Could you share a little more detail?",
    "You can email us at " . CONTACT_EMAIL . " or call " . CONTACT_PHONE . ".",
    "Thanks for your patience — I'm looking into this for you now.",
    "We'd love to help. Shall I put together a quick quote for you?",
    "Great, thanks! A specialist will follow up with you shortly.",
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex, nofollow">
	<title>Live Chat - AussieWeb Growth Admin</title>
	<link rel="icon" href="<?= site_url('assets/img/logo.png') ?>" type="image/png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,500;12..96,600;12..96,700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= site_url('assets/fonts/remixicon.css') ?>">
	<link rel="stylesheet" href="<?= site_url('assets/css/custom-aussiewebgrowth.css') ?>">
	<style>
		body.admin-body { padding-top: 0; }
		.admin-top { background: var(--black-200); padding: 14px 0; margin-bottom: 34px; border-bottom: 3px solid var(--primary-color); box-shadow: 0 14px 34px rgba(2, 33, 105, 0.28); }
		.admin-top .admin-top-inner { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px; }
		.admin-top-left { display: flex; align-items: center; gap: 14px; flex-wrap: wrap; }
		.admin-brand { font-family: var(--bricolage); font-weight: 700; font-size: 22px; color: #fff; letter-spacing: -0.4px; white-space: nowrap; line-height: 1; }
		.admin-brand span { color: var(--primary-color); }
		.admin-brand:hover { color: #fff; opacity: 0.9; }
		.admin-top-divider { width: 1px; height: 26px; background: rgba(255, 255, 255, 0.25); }
		.admin-top-label { color: #fff; font-size: 16px; font-weight: 700; display: inline-flex; align-items: center; gap: 10px; }
		.admin-top-label .admin-count { color: rgba(255, 255, 255, 0.55); font-weight: 600; }
		.admin-top .admin-actions { display: flex; gap: 10px; align-items: center; flex-wrap: wrap; }
		.btn-outline { display: inline-block; background: transparent; border: 1px solid rgba(255,255,255,.35); color: #fff; padding: 9px 18px; border-radius: 50px; font-size: 14px; font-weight: 600; transition: all .3s ease; cursor: pointer; }
		.btn-outline:hover { background: var(--primary-color); border-color: var(--primary-color); color: #fff; text-decoration: none; }
		.btn-danger-sm { background: #c53030; color: #fff; border: none; font-size: 13px; font-weight: 600; padding: 9px 16px; border-radius: 50px; cursor: pointer; transition: background .3s ease; }
		.btn-danger-sm:hover { background: #8e2a2a; }
		.lead-status { display: inline-flex; align-items: center; gap: 6px; padding: 5px 12px; border-radius: 50px; font-size: 12px; font-weight: 700; white-space: nowrap; }
		.lead-status.is-new { background: var(--primary-color); color: #fff; }
	</style>
</head>
<body class="admin-body">

	<div class="admin-top">
		<div class="container">
			<div class="admin-top-inner">
				<div class="admin-top-left">
					<a class="admin-brand" href="<?= site_url('') ?>">AussieWeb <span>Growth</span></a>
					<span class="admin-top-divider"></span>
					<span class="admin-top-label">Live Chat <span class="admin-count" id="chat-total">(<?= $total ?>)</span> <span class="lead-status is-new" id="chat-unread-pill" <?= $unread === 0 ? 'hidden' : '' ?>><i class="ri-chat-new-line"></i><span id="chat-unread-count"><?= $unread ?></span> new</span></span>
				</div>
				<div class="admin-actions">
					<button type="button" class="btn-outline sound-toggle" id="sound-toggle" title="Toggle new-message sound">
						<i class="ri-volume-up-line" id="sound-icon"></i> <span id="sound-label">Sound On</span>
					</button>
					<a class="btn-outline" href="<?= site_url('admin/leads') ?>"><i class="ri-inbox-2-line"></i> Leads</a>
					<a class="btn-outline" href="<?= site_url('') ?>"><i class="ri-global-line"></i> View Site</a>
					<a class="btn-outline" href="<?= site_url('admin/logout') ?>" onclick="return confirm('Log out of the admin area?');"><i class="ri-logout-box-r-line"></i> Logout</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container" style="padding-bottom:60px;">
		<div class="chat-shell">
			<div class="chat-list-card">
				<div class="chat-list-head">
					<strong>Conversations</strong>
					<span class="chat-list-count" id="chat-list-count">0</span>
				</div>
				<div class="chat-search">
					<i class="ri-search-line"></i>
					<input type="text" id="chat-search-input" placeholder="Search name, email or message...">
				</div>
				<div class="chat-list" id="chat-list"></div>
			</div>

			<div class="chat-thread-card">
				<div class="chat-thread-head">
					<div class="chat-thread-id">
						<div class="chat-avatar" id="thread-avatar" hidden><span id="thread-initials"></span><span class="chat-dot"></span></div>
						<div>
							<h3 class="chat-thread-name" id="thread-name">Select a conversation</h3>
							<div class="chat-thread-sub"><span id="thread-meta">Pick a conversation from the list to read and reply.</span> <span class="chat-online-badge" id="thread-online" hidden><span class="awg-status-dot"></span>Online</span></div>
						</div>
					</div>
					<div class="chat-thread-actions">
						<button type="button" class="btn-danger-sm" id="thread-delete" hidden><i class="ri-delete-bin-line"></i> Delete</button>
					</div>
				</div>
				<div class="chat-thread-body" id="thread-body">
					<div class="chat-thread-placeholder">
						<i class="ri-chat-3-line"></i>
						<p class="mt-2 mb-0">Choose a conversation from the list to read and reply.</p>
					</div>
				</div>
				<div class="chat-quick" id="thread-quick" hidden>
					<?php foreach ($quickReplies as $qr): ?>
						<button type="button" class="chat-quick-btn"><?= htmlspecialchars($qr, ENT_QUOTES, 'UTF-8') ?></button>
					<?php endforeach; ?>
				</div>
				<div class="awg-typing" id="chat-typing" hidden>
					<span class="awg-typing-dots"><i></i><i></i><i></i></span>
					<span>Visitor is typing&hellip;</span>
				</div>
				<form class="chat-thread-form" id="thread-form" hidden>
					<textarea id="thread-input" placeholder="Type your reply... (Enter to send, Shift+Enter for a new line)" maxlength="2000"></textarea>
					<button type="submit" class="btn btn-primary"><i class="ri-send-plane-2-line"></i> Send</button>
				</form>
			</div>
		</div>
	</div>

	<script>
	(function () {
		var API = <?= json_encode(site_url('chat-api')) ?>;
		var listEl    = document.getElementById('chat-list');
		var bodyEl    = document.getElementById('thread-body');
		var nameEl    = document.getElementById('thread-name');
		var metaEl    = document.getElementById('thread-meta');
		var avatarEl  = document.getElementById('thread-avatar');
		var initialsEl= document.getElementById('thread-initials');
		var formEl    = document.getElementById('thread-form');
		var quickEl   = document.getElementById('thread-quick');
		var inputEl   = document.getElementById('thread-input');
		var delBtn    = document.getElementById('thread-delete');
		var totalEl   = document.getElementById('chat-total');
		var listCountEl = document.getElementById('chat-list-count');
		var pillEl    = document.getElementById('chat-unread-pill');
		var countEl   = document.getElementById('chat-unread-count');
		var searchEl  = document.getElementById('chat-search-input');
		var soundBtn  = document.getElementById('sound-toggle');
		var soundIcon = document.getElementById('sound-icon');
		var soundLbl  = document.getElementById('sound-label');
		var onlineBadge = document.getElementById('thread-online');
		var typingEl  = document.getElementById('chat-typing');

		var current = null;
		var listCache = [];
		var ringing = false;
		var typingTimer = null;
		var typingSent = false;

		// ----- Soft SMS-style chime (Web Audio, no asset needed) -----
		var Sound = (function () {
			var ctx = null;
			var muted = localStorage.getItem('awgc_muted') === '1';
			function ensure() {
				if (!ctx) {
					try { ctx = new (window.AudioContext || window.webkitAudioContext)(); } catch (e) { ctx = null; }
				}
				if (ctx && ctx.state === 'suspended') { ctx.resume(); }
				return ctx;
			}
			function chime() {
				if (muted) return;
				var c = ensure();
				if (!c) return;
				var t0 = c.currentTime;
				[880, 1174.66].forEach(function (f, i) {
					var o = c.createOscillator();
					var g = c.createGain();
					o.type = 'sine';
					o.frequency.value = f;
					var t = t0 + i * 0.16;
					g.gain.setValueAtTime(0.0001, t);
					g.gain.linearRampToValueAtTime(0.07, t + 0.02);
					g.gain.exponentialRampToValueAtTime(0.0001, t + 0.32);
					o.connect(g); g.connect(c.destination);
					o.start(t); o.stop(t + 0.34);
				});
			}
			return {
				chime: chime,
				resume: ensure,
				isMuted: function () { return muted; },
				setMuted: function (m) { muted = m; try { localStorage.setItem('awgc_muted', m ? '1' : '0'); } catch (e) {} }
			};
		})();

		document.addEventListener('click', Sound.resume, { once: true });
		document.addEventListener('keydown', Sound.resume, { once: true });

		var ringTimer = null;
		function updateRing(shouldRing) {
			ringing = shouldRing;
			if (shouldRing && !ringTimer) {
				Sound.chime();
				ringTimer = setInterval(Sound.chime, 3000);
			} else if (!shouldRing && ringTimer) {
				clearInterval(ringTimer);
				ringTimer = null;
			}
		}

		function renderSoundButton() {
			var m = Sound.isMuted();
			soundIcon.className = m ? 'ri-volume-mute-line' : 'ri-volume-up-line';
			soundLbl.textContent = m ? 'Sound Off' : 'Sound On';
			soundBtn.classList.toggle('is-muted', m);
		}
		soundBtn.addEventListener('click', function () {
			var next = !Sound.isMuted();
			Sound.setMuted(next);
			if (!next) { Sound.resume(); }
			renderSoundButton();
			updateRing(ringing && !next);
		});
		renderSoundButton();

		function req(method, params) {
			var qs = new URLSearchParams(params).toString();
			if (method === 'GET') {
				return fetch(API + '?' + qs, { headers: { 'Accept': 'application/json' } }).then(function (r) { return r.json(); });
			}
			return fetch(API, {
				method: 'POST',
				headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' },
				body: qs
			}).then(function (r) { return r.json(); });
		}

		function fmtTime(iso) {
			if (!iso) return '';
			var d = new Date(iso);
			if (isNaN(d.getTime())) return '';
			var now = new Date();
			return d.toDateString() === now.toDateString()
				? d.toLocaleTimeString([], { hour: 'numeric', minute: '2-digit' })
				: d.toLocaleDateString([], { month: 'short', day: 'numeric' }) + ' ' + d.toLocaleTimeString([], { hour: 'numeric', minute: '2-digit' });
		}

		function dayLabel(iso) {
			var d = new Date(iso);
			if (isNaN(d.getTime())) return '';
			var now = new Date();
			if (d.toDateString() === now.toDateString()) return 'Today';
			var y = new Date(now.getTime() - 86400000);
			if (d.toDateString() === y.toDateString()) return 'Yesterday';
			return d.toLocaleDateString([], { weekday: 'short', month: 'short', day: 'numeric' });
		}

		function initials(name) {
			name = (name || 'Guest').trim();
			var parts = name.split(/\s+/).slice(0, 2);
			return parts.map(function (p) { return p.charAt(0).toUpperCase(); }).join('') || 'G';
		}

		function renderList(chats) {
			listCache = chats;
			var q = (searchEl.value || '').trim().toLowerCase();
			var shown = q ? chats.filter(function (c) {
				return ((c.name || '') + ' ' + (c.email || '') + ' ' + (c.preview || '')).toLowerCase().indexOf(q) !== -1;
			}) : chats;

			var totalUnread = 0;
			var anyUnreadOpen = false;
			listEl.innerHTML = '';

			if (!shown.length) {
				var empty = document.createElement('div');
				empty.className = 'chat-list-empty';
				empty.innerHTML = '<i class="ri-chat-off-line"></i>';
				empty.appendChild(document.createTextNode(q ? 'No matching conversations.' : 'No conversations yet.'));
				listEl.appendChild(empty);
			}

			shown.forEach(function (c) {
				totalUnread += c.unread || 0;
				var isOpen = c.id === current;
				if (c.unread > 0 && !isOpen) { anyUnreadOpen = true; }

				var btn = document.createElement('button');
				btn.type = 'button';
				btn.className = 'chat-item' + (isOpen ? ' is-active' : '') + (c.unread > 0 && !isOpen ? ' is-ringing' : '');
				btn.setAttribute('data-id', c.id);

				var av = document.createElement('div');
				av.className = 'chat-avatar' + (c.online ? ' is-online' : '');
				av.appendChild(document.createTextNode(initials(c.name)));
				var dot = document.createElement('span');
				dot.className = 'chat-dot';
				av.appendChild(dot);

				var body = document.createElement('div');
				body.className = 'chat-item-body';

				var top = document.createElement('div');
				top.className = 'chat-item-top';
				var nm = document.createElement('span');
				nm.className = 'chat-item-name';
				nm.textContent = c.name || 'Guest';
				var right = document.createElement('span');
				right.style.cssText = 'display:inline-flex;align-items:center;gap:8px;';
				if (c.unread > 0) {
					var badge = document.createElement('span');
					badge.className = 'chat-item-unread';
					badge.textContent = c.unread > 9 ? '9+' : String(c.unread);
					right.appendChild(badge);
				}
				var tm = document.createElement('span');
				tm.className = 'chat-item-time';
				tm.textContent = fmtTime(c.updated_at);
				right.appendChild(tm);
				top.appendChild(nm);
				top.appendChild(right);

				var pv = document.createElement('div');
				pv.className = 'chat-item-preview';
				if (c.typing) {
					pv.classList.add('is-typing');
					pv.textContent = 'typing…';
				} else {
					pv.textContent = c.preview || 'No messages yet';
				}

				body.appendChild(top);
				body.appendChild(pv);
				btn.appendChild(av);
				btn.appendChild(body);
				btn.addEventListener('click', function () { openThread(c.id); });
				listEl.appendChild(btn);
			});

			totalEl.textContent = '(' + chats.length + ')';
			listCountEl.textContent = shown.length;
			if (totalUnread > 0) { countEl.textContent = totalUnread; pillEl.hidden = false; }
			else { pillEl.hidden = true; }
			document.title = (totalUnread > 0 ? '(' + totalUnread + ') ' : '') + 'Live Chat - AussieWeb Growth Admin';

			updateRing(anyUnreadOpen && !Sound.isMuted());
		}

		function renderThread(data) {
			bodyEl.innerHTML = '';
			if (!data.messages.length) {
				var ph = document.createElement('div');
				ph.className = 'chat-thread-placeholder';
				ph.textContent = 'No messages yet — waiting for the visitor to type.';
				bodyEl.appendChild(ph);
			}
			var lastDay = null;
			data.messages.forEach(function (m) {
				var day = dayLabel(m.at);
				if (day && day !== lastDay) {
					lastDay = day;
					var sep = document.createElement('div');
					sep.className = 'chat-day';
					sep.textContent = day;
					bodyEl.appendChild(sep);
				}
				var b = document.createElement('div');
				var cls = m.from === 'admin' ? 'is-admin' : 'is-visitor';
				b.className = 'chat-bubble ' + cls;
				b.appendChild(document.createTextNode(m.text));
				var t = document.createElement('span');
				t.className = 'chat-bubble-time';
				t.textContent = fmtTime(m.at);
				b.appendChild(t);
				bodyEl.appendChild(b);
			});
			bodyEl.scrollTop = bodyEl.scrollHeight;
		}

		function applyThreadPresence(r) {
			var p = r.presence || {};
			if (onlineBadge) { onlineBadge.hidden = !p.visitor_online; }
			if (typingEl) { typingEl.hidden = !p.typing_visitor; }
		}

		function openThread(id) {
			current = id;
			updateRing(false);
			Array.prototype.forEach.call(listEl.querySelectorAll('.chat-item'), function (el) {
				el.classList.toggle('is-active', el.getAttribute('data-id') === id);
				el.classList.remove('is-ringing');
			});
			req('GET', { action: 'admin_thread', id: id, read: '1' }).then(function (r) {
				if (!r.ok) return;
				nameEl.textContent = r.name || 'Guest';
				metaEl.textContent = (r.email ? r.email + ' · ' : '') + (r.page || '/');
				avatarEl.hidden = false;
				initialsEl.textContent = initials(r.name);
				avatarEl.classList.toggle('is-online', !!(r.presence && r.presence.visitor_online));
				delBtn.hidden = false;
				formEl.hidden = false;
				quickEl.hidden = false;
				applyThreadPresence(r);
				renderThread(r);
				inputEl.focus();
				refreshList();
			});
		}

		function refreshList() {
			req('GET', { action: 'admin_list' }).then(function (r) {
				if (r.ok) {
					renderList(r.chats);
				}
			});
		}

		function pollThread() {
			if (!current) return;
			req('GET', { action: 'admin_thread', id: current, read: '1' }).then(function (r) {
				if (r.ok) {
					applyThreadPresence(r);
					renderThread(r);
				}
			});
		}

		formEl.addEventListener('submit', function (e) {
			e.preventDefault();
			var text = inputEl.value.trim();
			if (!current || !text) return;
			inputEl.value = '';
			clearTimeout(typingTimer);
			typingSent = false;
			req('POST', { action: 'admin_send', id: current, message: text }).then(function (r) {
				if (r.ok) { renderThread(r); refreshList(); }
			});
		});

		inputEl.addEventListener('keydown', function (e) {
			if (e.key === 'Enter' && !e.shiftKey) {
				e.preventDefault();
				formEl.dispatchEvent(new Event('submit', { cancelable: true }));
			}
		});

		function sendAdminTyping(state) {
			if (!current) return;
			req('POST', { action: 'admin_typing', id: current, typing: state ? '1' : '0' }).catch(function () {});
		}
		inputEl.addEventListener('input', function () {
			var has = inputEl.value.trim().length > 0;
			if (has && !typingSent) { typingSent = true; sendAdminTyping(true); }
			clearTimeout(typingTimer);
			if (has) {
				typingTimer = setTimeout(function () {
					if (typingSent) { typingSent = false; sendAdminTyping(false); }
				}, 2500);
			} else if (typingSent) {
				typingSent = false;
				sendAdminTyping(false);
			}
		});

		quickEl.addEventListener('click', function (e) {
			var b = e.target.closest('.chat-quick-btn');
			if (!b || !current) return;
			inputEl.value = b.textContent;
			inputEl.focus();
			clearTimeout(typingTimer);
			typingSent = false;
		});

		searchEl.addEventListener('input', function () { renderList(listCache); });

		delBtn.addEventListener('click', function () {
			if (!current || !confirm('Delete this conversation? This cannot be undone.')) return;
			req('POST', { action: 'admin_delete', id: current }).then(function (r) {
				if (!r.ok) return;
				current = null;
				nameEl.textContent = 'Select a conversation';
				metaEl.textContent = 'Pick a conversation from the list to read and reply.';
				avatarEl.hidden = true;
				delBtn.hidden = true;
				formEl.hidden = true;
				quickEl.hidden = true;
				bodyEl.innerHTML = '<div class="chat-thread-placeholder"><i class="ri-chat-3-line"></i><p class="mt-2 mb-0">Choose a conversation from the list to read and reply.</p></div>';
				refreshList();
			});
		});

		refreshList();
		setInterval(refreshList, 6000);
		setInterval(pollThread, 5000);
	})();
	</script>
</body>
</html>
