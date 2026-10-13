<?php
// =========================================================
// Shared footer + scripts
// =========================================================
require_once __DIR__ . '/../config.php';

if (empty($GLOBALS['SERVICES'])) {
    require_once __DIR__ . '/../Pages/_services.php';
}
?>
	<!-- ========== Footer ========== -->
	<footer class="footer-bg">
		<div class="footer-top">
			<div class="container">
				<?php if (empty($skipGlobalForm)): ?>
				<div class="global-form-band">
					<div class="gl-inner">
						<div class="gl-title">
							<h3>Get a <span>free SEO assessment</span></h3>
							<p>Tell us about your site and we'll show you the five fixes that actually move rankings and revenue. No sales pitch — a direct answer.</p>
						</div>
						<form method="post" action="<?= site_url('contact') ?>" novalidate>
							<div class="gl-fields">
								<input type="text" name="name" class="gf-name" placeholder="Your name" required aria-label="Your name">
								<input type="email" name="email" class="gf-email" placeholder="Email address" required aria-label="Email address">
								<textarea name="message" class="gf-msg" placeholder="What are you trying to rank for?" required aria-label="Your message"></textarea>
								<div class="hs-honeypot"><input type="text" name="company" tabindex="-1" autocomplete="off" aria-hidden="true"></div>
							</div>
							<div class="gl-submit">
								<button type="submit" name="submit" value="Send message" class="btn btn-primary">Request Free Assessment <i class="ri-send-plane-line"></i></button>
								<span class="gl-note"><i class="ri-lock-line"></i>No spam. Replied within one business day.</span>
							</div>
						</form>
					</div>
				</div>
				<?php endif; ?>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
						<div class="footer-about">
							<h3 class="footer-logo">AussieWeb <span>Growth</span></h3>
							<p class="footer-desc">An SEO management company that ranks the fifty problems in a typical audit down to the five that actually move rankings and revenue.</p>
							<div class="footer-social">
								<a href="https://www.facebook.com/hellosuggest" aria-label="Facebook"><i class="ri-facebook-fill"></i></a>
								<a href="https://www.instagram.com/hellosuggest" aria-label="Instagram"><i class="ri-instagram-fill"></i></a>
								<a href="https://x.com/hellosuggest" aria-label="Twitter / X"><i class="ri-twitter-x-fill"></i></a>
								<a href="#" aria-label="LinkedIn"><i class="ri-linkedin-fill"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
						<h4 class="footer-heading">Quick Links</h4>
						<ul class="footer-links">
							<li><a href="<?= site_url('') ?>#home"><i class="ri-arrow-right-s-line"></i>Home</a></li>
							<li><a href="<?= site_url('') ?>#how"><i class="ri-arrow-right-s-line"></i>How It Works</a></li>
							<li><a href="<?= site_url('seo-services') ?>"><i class="ri-arrow-right-s-line"></i>SEO Services</a></li>
							<li><a href="<?= site_url('contact') ?>"><i class="ri-arrow-right-s-line"></i>Contact</a></li>
						</ul>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
						<h4 class="footer-heading">Get In Touch</h4>
						<div class="footer-contact-item">
							<i class="ri-phone-line"></i>
							<a href="tel:+61480008582">+61 480 008 582</a>
						</div>
						<div class="footer-contact-item">
							<i class="ri-mail-line"></i>
							<a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= e(CONTACT_EMAIL) ?></a>
						</div>
						<div class="footer-contact-item">
							<i class="ri-map-pin-2-line"></i>
							<span>Parkwood, Gold Coast QLD, Australia</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom-wrap">
					<p>Copyright &copy; <?= date('Y') ?> <a href="<?= site_url('') ?>"><?= e(SITE_NAME) ?></a>. All Rights Reserved.</p>
					<ul class="footer-bottom-links">
						<li><a href="<?= site_url('sitemap.xml') ?>">Sitemap</a></li>
						<li><a href="<?= site_url('llms.txt') ?>" rel="llms">LLMs.txt</a></li>
						<li><a href="<?= site_url('contact') ?>">Contact</a></li>
						<li><a href="<?= site_url('blog') ?>">Blog</a></li>
						<li><a href="<?= site_url('') ?>#faqs">FAQ</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- ========== End Footer ========== -->

	<div id="scroll-to-top" class="scroll-top" aria-label="Scroll to top">
		<i class="ri-arrow-up-s-line"></i>
		<svg width="100%" height="100%" viewBox="-1 -1 102 102" stroke="#E4022B" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
		</svg>
	</div>

	<script src="<?= site_url('assets/js/hellosuggest.js') . '?v=' . ($vJs ?? date('YmdHis')) ?>"></script>
</body>
</html>