<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/functions.php';

$pageTitle       = 'Contact Us';
$pageDescription = 'Get a free SEO assessment. Tell us about your website and we will show you the five fixes that actually move rankings and revenue.';
$active          = 'contact';
$canonicalPath   = 'contact';

$contactSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'ContactPage',
    'name'     => 'Contact AussieWeb Growth',
    'url'      => absolute_url('contact'),
    'about'    => SITE_TAGLINE,
];

$breadcrumbSchema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => absolute_url('')],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Contact', 'item' => absolute_url('contact')],
    ],
];

$extraSchema = '<script type="application/ld+json">' . json_encode($contactSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>'
    . '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $name    = clean($_POST['name'] ?? '');
    $email   = clean($_POST['email'] ?? '');
    $phone   = clean($_POST['phone'] ?? '');
    $company = clean($_POST['company'] ?? '');
    $subject = clean($_POST['subject'] ?? '');
    $budget  = clean($_POST['budget'] ?? '');
    $message = clean($_POST['message'] ?? '');

    if ($name === '' || mb_strlen($name) < 2) {
        $errors[] = 'Please enter your full name.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    }
    if ($message === '' || mb_strlen($message) < 10) {
        $errors[] = 'Please write a message of at least 10 characters.';
    }

    // Simple honeypot to block basic bots (hidden field "company" must stay empty).
    $honeypot = clean($_POST['company'] ?? '');

    if (!$errors && $honeypot === '') {
        $lead = [
            'id'         => uniqid('lead_', true),
            'name'       => $name,
            'email'      => $email,
            'phone'      => $phone,
    'company'   => $company,
            'subject'    => $subject,
            'budget'     => $budget,
            'message'    => $message,
            'ip'         => $_SERVER['REMOTE_ADDR'] ?? '',
            'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? '',
            'processed'  => false,
            'created_at' => date('c'),
        ];

        $saved = append_lead($lead);
        send_lead_notification($lead);

        if ($saved) {
            $_SESSION['flash_success'] = 'Thank you, ' . $name . '! Your request has been received. We will reply within one business day.';
            header('Location: ' . site_url('contact'));
            exit;
        }
        $errors[] = 'Sorry, we could not save your request. Please try again shortly.';
    } elseif ($honeypot !== '') {
        $errors[] = 'Your submission could not be processed.';
    }
}

require __DIR__ . '/includes/header.php';
?>

<!-- ========== PAGE HERO ========== -->
<section class="page-hero section">
	<div class="container">
		<div class="col-lg-9 col-xs-12 mx-auto text-center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-mail-line"></i>Contact</h3>
			<h1>Get a Free SEO Assessment</h1>
			<p class="sec-lead mx-auto">Tell us about your site and we'll show you the five fixes, out of the fifty in a typical audit, that will actually move rankings and revenue this quarter. No sales pitch, no 40-page report.</p>
		</div>
	</div>
</section>
<!-- ========== END PAGE HERO ========== -->

<!-- ========== CONTACT ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-12 mb-4">
				<div class="contact-info-card fadeInUp" data-delay="0.2">
					<h2>Let's figure out what actually matters</h2>
					<p>We review your submission and the basics of your site, then send back a prioritized list of the fixes that matter most and schedule a short call to walk through it. No obligation.</p>
					<div class="contact-detail-row">
						<div class="contact-icon"><i class="ri-mail-line"></i></div>
						<div class="detail-text">
							<h5>Email Us</h5>
							<a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= e(CONTACT_EMAIL) ?></a>
						</div>
					</div>
					<div class="contact-detail-row">
						<div class="contact-icon"><i class="ri-time-line"></i></div>
						<div class="detail-text">
							<h5>Response Time</h5>
							<span>Within one business day, Mon-Fri</span>
						</div>
					</div>
					<div class="contact-detail-row">
						<div class="contact-icon"><i class="ri-list-check-2"></i></div>
						<div class="detail-text">
							<h5>What You Receive</h5>
							<span>A prioritized list of the five fixes that move rankings and revenue</span>
						</div>
					</div>
					<div class="contact-detail-row">
						<div class="contact-icon"><i class="ri-global-line"></i></div>
						<div class="detail-text">
							<h5>Where We Work</h5>
							<span>Remotely across regions and time zones</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-md-12 mb-4">
				<div class="contact-form-card fadeInUp" data-delay="0.4">
					<?php if ($success = flash('flash_success')): ?>
						<div class="form-alert form-alert-success"><i class="ri-checkbox-circle-line"></i><?= e($success) ?></div>
					<?php endif; ?>
					<?php if ($errors): ?>
						<div class="form-alert form-alert-error">
							<i class="ri-error-warning-line"></i>
							<ul>
								<?php foreach ($errors as $err): ?><li><?= e($err) ?></li><?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>

					<form method="post" action="<?= site_url('contact') ?>" novalidate>
						<div class="row">
							<div class="col-md-6 form-group">
								<label for="name">Full Name *</label>
								<input type="text" id="name" name="name" placeholder="e.g. John Smith" required="required" value="<?= e($_POST['name'] ?? '') ?>">
							</div>
							<div class="col-md-6 form-group">
								<label for="email">Email Address *</label>
								<input type="email" id="email" name="email" placeholder="e.g. john@yourbusiness.com" required="required" value="<?= e($_POST['email'] ?? '') ?>">
							</div>
							<div class="col-md-6 form-group">
								<label for="phone">Phone Number</label>
								<input type="text" id="phone" name="phone" placeholder="e.g. (555) 123-4567" value="<?= e($_POST['phone'] ?? '') ?>">
							</div>
							<div class="col-md-6 form-group">
							<label for="company">Company Name</label>
							<input type="text" id="company" name="company" placeholder="e.g. Acme Pty Ltd" value="<?= e($_POST['company'] ?? '') ?>">
							</div>
							<div class="col-md-6 form-group">
								<label for="subject">Subject</label>
								<input type="text" id="subject" name="subject" placeholder="What do you need help with?" value="<?= e($_POST['subject'] ?? '') ?>">
							</div>
							<div class="col-md-6 form-group">
								<label for="budget">Budget Range (optional)</label>
								<select id="budget" name="budget">
									<option value="">Select a range</option>
									<option value="Under $500/mo" <?= ($_POST['budget'] ?? '') === 'Under $500/mo' ? 'selected' : '' ?>>Under $500/mo</option>
									<option value="$500 - $1,500/mo" <?= ($_POST['budget'] ?? '') === '$500 - $1,500/mo' ? 'selected' : '' ?>>$500 - $1,500/mo</option>
									<option value="$1,500 - $5,000/mo" <?= ($_POST['budget'] ?? '') === '$1,500 - $5,000/mo' ? 'selected' : '' ?>>$1,500 - $5,000/mo</option>
									<option value="$5,000+/mo" <?= ($_POST['budget'] ?? '') === '$5,000+/mo' ? 'selected' : '' ?>>$5,000+/mo</option>
									<option value="One-time audit" <?= ($_POST['budget'] ?? '') === 'One-time audit' ? 'selected' : '' ?>>One-time audit only</option>
								</select>
							</div>
							<!-- Honeypot field: humans leave it empty -->
							<div class="col-md-12 form-group hs-honeypot">
								<input type="text" name="company" placeholder="Leave this field empty" tabindex="-1" autocomplete="off" aria-hidden="true">
							</div>
							<div class="col-md-12 form-group">
								<label for="message">Tell Us About Your Site and Goals *</label>
								<textarea id="message" name="message" placeholder="What are you trying to rank for? What have you tried already?" required="required"><?= e($_POST['message'] ?? '') ?></textarea>
							</div>
							<div class="col-md-12">
								<button type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-primary form-submit">Send Message <i class="ri-send-plane-line"></i></button>
								<p class="form-note">We'll get back to you within one business day. No spam, ever.</p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== END CONTACT ========== -->

<?php
// The contact page already has its own full form — hide the global footer form here.
$skipGlobalForm = true;
require __DIR__ . '/includes/footer.php';
?>