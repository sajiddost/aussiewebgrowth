/* =========================================================
   AussieWeb Growth — visitor live chat widget
   Talks to chat-api.php. Renders everything with textContent
   so chat text can never inject markup.
   ========================================================= */
(function () {
	'use strict';

	var root = document.getElementById('awg-chat');
	if (!root) return;

	var api = root.getAttribute('data-api');

	var launcher = root.querySelector('.awg-chat-launch');
	var badge    = root.querySelector('.awg-chat-badge');
	var panel    = root.querySelector('.awg-chat-panel');
	var closeBtn = root.querySelector('.awg-chat-close');
	var prechat  = root.querySelector('.awg-chat-prechat');
	var thread   = root.querySelector('.awg-chat-thread');
	var listEl   = root.querySelector('.awg-chat-messages');
	var form     = root.querySelector('.awg-chat-form');
	var input    = root.querySelector('.awg-chat-input');
	var startBtn = root.querySelector('.awg-chat-start');
	var nameEl   = root.querySelector('.awg-chat-name');
	var emailEl  = root.querySelector('.awg-chat-email');
	var statusEl = root.querySelector('.awg-status');
	var statusTxt = statusEl ? statusEl.querySelector('.awg-status-text') : null;
	var typingEl = root.querySelector('.awg-typing');
	var typingLabel = typingEl ? typingEl.querySelector('.awg-typing-label') : null;

	var started = false;
	var open    = false;
	var sending = false;
	var presence = { admin_online: false, typing_admin: false };
	var lastMessages = [];
	var lastVisitorAt = 0;
	var typingTimer = null;
	var typingSent = false;

	function request(method, params) {
		var qs = new URLSearchParams(params).toString();
		if (method === 'GET') {
			return fetch(api + '?' + qs, { headers: { 'Accept': 'application/json' } })
				.then(function (r) { return r.json(); });
		}
		return fetch(api, {
			method: 'POST',
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' },
			body: qs
		}).then(function (r) { return r.json(); });
	}

	function bubble(from, text, at) {
		var row = document.createElement('div');
		row.className = 'awg-msg ' + (from === 'admin' ? 'is-admin' : 'is-visitor');

		var b = document.createElement('div');
		b.className = 'awg-bubble';
		b.appendChild(document.createTextNode(text));

		if (at) {
			var t = document.createElement('span');
			t.className = 'awg-time';
			try { t.textContent = new Date(at).toLocaleTimeString([], { hour: 'numeric', minute: '2-digit' }); } catch (e) {}
			b.appendChild(t);
		}

		row.appendChild(b);
		return row;
	}

	function render(messages) {
		lastMessages = messages || [];
		listEl.innerHTML = '';
		listEl.appendChild(bubble('admin', 'Hi there! How can we help you today?'));
		lastMessages.forEach(function (m) {
			listEl.appendChild(bubble(m.from, m.text, m.at));
		});
		listEl.scrollTop = listEl.scrollHeight;
		updateTyping();
	}

	function applyPresence(r) {
		if (r.presence) { presence = r.presence; }
		var online = !!presence.admin_online;
		if (statusEl) {
			statusEl.classList.toggle('is-online', online);
			if (statusTxt) {
				statusTxt.textContent = online ? 'We are online right now' : 'We usually reply within a few minutes';
			}
		}
		updateTyping();
	}

	function updateTyping() {
		var show  = !!presence.typing_admin;
		var label = 'AussieWeb Growth is typing…';
		if (typingEl) {
			typingEl.hidden = !show;
			if (show && typingLabel) typingLabel.textContent = label;
		}
	}

	function sendTyping(state) {
		if (!started) return;
		request('POST', { action: 'typing', typing: state ? '1' : '0' }).catch(function () {});
	}

	function showThread() {
		started = true;
		prechat.hidden = true;
		thread.hidden = false;
	}
	function showPrechat() {
		started = false;
		prechat.hidden = false;
		thread.hidden = true;
	}

	function setBadge(n) {
		if (n > 0 && !open) {
			badge.hidden = false;
			badge.textContent = n > 9 ? '9+' : String(n);
		} else {
			badge.hidden = true;
		}
	}

	function openPanel() {
		open = true;
		panel.hidden = false;
		launcher.classList.add('is-open');
		setBadge(0);
		if (started) poll();
		if (started && input) input.focus();
	}
	function closePanel() {
		open = false;
		panel.hidden = true;
		launcher.classList.remove('is-open');
	}

	launcher.addEventListener('click', function () { open ? closePanel() : openPanel(); });
	if (closeBtn) closeBtn.addEventListener('click', closePanel);

	if (startBtn) {
		startBtn.addEventListener('click', function () {
			startBtn.disabled = true;
			request('POST', {
				action: 'start',
				name: nameEl ? nameEl.value : '',
				email: emailEl ? emailEl.value : '',
				page: location.pathname
			}).then(function (r) {
				startBtn.disabled = false;
				if (!r.ok) return;
				showThread();
				render(r.messages);
				applyPresence(r);
				if (input) input.focus();
			}).catch(function () { startBtn.disabled = false; });
		});
	}

	if (form) {
		form.addEventListener('submit', function (e) {
			e.preventDefault();
			var text = input.value.trim();
			if (text === '' || sending) return;
			sending = true;
			input.value = '';
			clearTimeout(typingTimer);
			typingSent = false;
			request('POST', { action: 'send', message: text }).then(function (r) {
				sending = false;
				if (r.ok) { render(r.messages); applyPresence(r); }
			}).catch(function () { sending = false; });
		});
	}

	// Live typing: tell the other side while this visitor is composing
	if (input) {
		input.addEventListener('input', function () {
			var has = input.value.trim().length > 0;
			if (has && !typingSent) { typingSent = true; sendTyping(true); }
			clearTimeout(typingTimer);
			if (has) {
				typingTimer = setTimeout(function () {
					if (typingSent) { typingSent = false; sendTyping(false); }
				}, 2500);
			} else if (typingSent) {
				typingSent = false;
				sendTyping(false);
			}
		});
	}

	function poll() {
		request('GET', { action: 'poll' }).then(function (r) {
			if (!r.has_chat) { showPrechat(); return; }
			showThread();
			render(r.messages);
			applyPresence(r);
		});
	}

	function tick() {
		if (open && started) {
			poll();
		} else if (started) {
			request('GET', { action: 'check' }).then(function (r) {
				if (r.has_chat) setBadge(r.unread || 0);
				applyPresence(r);
			});
		}
	}

	request('GET', { action: 'init' }).then(function (r) {
		if (r.has_chat) {
			showThread();
			render(r.messages);
			setBadge(r.unread || 0);
			applyPresence(r);
		} else {
			showPrechat();
		}
	});

	setInterval(tick, 5000);
	setInterval(updateTyping, 1000);
})();
