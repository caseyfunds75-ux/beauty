<?php
declare(strict_types=1);
session_start();
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/services-data.php';

if (empty($_SESSION['booking_csrf'])) {
    $_SESSION['booking_csrf'] = bin2hex(random_bytes(32));
}
$errors = [];
$submitted = false;
$form = ['name' => '', 'phone' => '', 'email' => '', 'service' => '', 'date' => '', 'time' => '', 'message' => ''];
$validServiceNames = array_column($services, 'name');
$initialService = trim((string)($_GET['service'] ?? ''));
if (in_array($initialService, $validServiceNames, true)) {
    $form['service'] = $initialService;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($form as $key => $_) {
        $form[$key] = trim((string)($_POST[$key] ?? ''));
    }
    if (!hash_equals($_SESSION['booking_csrf'], (string)($_POST['csrf_token'] ?? ''))) {
        $errors[] = 'Your session could not be verified. Please refresh the page and try again.';
    }
    if ($form['name'] === '' || !preg_match('/\A.{1,100}\z/us', $form['name'])) $errors[] = 'Please enter your name (up to 100 characters).';
    if (!preg_match('/^[0-9+()\-\s]{7,25}$/', $form['phone'])) $errors[] = 'Please enter a valid phone number.';
    if (!filter_var($form['email'], FILTER_VALIDATE_EMAIL) || strlen($form['email']) > 254) $errors[] = 'Please enter a valid email address.';
    if (!in_array($form['service'], $validServiceNames, true)) $errors[] = 'Please select a service from the list.';
    $bookingDate = DateTimeImmutable::createFromFormat('!Y-m-d', $form['date']);
    if (!$bookingDate || $bookingDate->format('Y-m-d') !== $form['date'] || $form['date'] < (new DateTimeImmutable('today'))->format('Y-m-d')) $errors[] = 'Please choose a valid date that is today or later.';
    if (!preg_match('/^(?:[01]\d|2[0-3]):[0-5]\d$/', $form['time']) || $form['time'] < '09:00' || $form['time'] > '19:00') $errors[] = 'Please select a preferred time between 9:00 AM and 7:00 PM.';
    if (!preg_match('/\A.{0,1000}\z/us', $form['message'])) $errors[] = 'Your message must be 1,000 characters or fewer.';
    if ($errors === []) {
        $submitted = true;
        $_SESSION['booking_csrf'] = bin2hex(random_bytes(32));
    }
}
$pageTitle = 'Book an Appointment | Beauty Emporia Abuja';
$metaDescription = 'Request a personalised beauty appointment at Beauty Emporia in Abuja.';
$activePage = '';
require __DIR__ . '/includes/header.php';
$today = (new DateTimeImmutable('today'))->format('Y-m-d');
$waMessage = "Hello Beauty Emporia, I would like to book an appointment.\n\nName: {$form['name']}\nService: {$form['service']}\nPreferred Date: {$form['date']}\nPreferred Time: {$form['time']}";
?>
<section class="page-hero"><div class="container reveal"><span class="eyebrow">YOUR TIME, YOUR WAY</span><h1>Let’s make a little<br><em>time for you.</em></h1><p>Tell us what you have in mind and our team will help plan your visit.</p></div></section>
<section class="section-pad booking-section"><div class="container"><div class="row g-5">
    <div class="col-lg-7">
        <div class="booking-panel reveal">
            <span class="eyebrow">APPOINTMENT REQUEST</span>
            <h2 class="section-title">Start with the <em>details.</em></h2>
            <?php if ($submitted): ?>
                <div class="alert alert-success mt-4" role="status"><strong>Your request is ready.</strong> This is a demo form: your details have not been saved or sent to the salon. Please use WhatsApp or the contact details to confirm your appointment.</div>
                <p class="body-copy">Requested service: <strong><?= e($form['service']) ?></strong> · <?= e($form['date']) ?> at <?= e($form['time']) ?></p>
                <?php if (whatsapp_url() !== ''): ?><a class="btn btn-dark-gold mt-2" href="<?= e(whatsapp_url($waMessage)) ?>" target="_blank" rel="noopener noreferrer">Continue on WhatsApp <span aria-hidden="true">↗</span></a><?php endif; ?>
                <a class="text-link d-block mt-4" href="booking.php">Make another request <span aria-hidden="true">↗</span></a>
            <?php else: ?>
                <?php if ($errors !== []): ?><div class="alert alert-danger" role="alert"><strong>Please check the following:</strong><ul class="mb-0 mt-2"><?php foreach ($errors as $error): ?><li><?= e($error) ?></li><?php endforeach; ?></ul></div><?php endif; ?>
                <form method="post" action="booking.php" id="booking-form" class="booking-form" novalidate>
                    <input type="hidden" name="csrf_token" value="<?= e($_SESSION['booking_csrf']) ?>">
                    <div class="row g-3">
                        <div class="col-md-6"><label for="booking-name" class="form-label">Full name</label><input class="form-control" id="booking-name" name="name" type="text" autocomplete="name" maxlength="100" required value="<?= e($form['name']) ?>"></div>
                        <div class="col-md-6"><label for="booking-phone" class="form-label">Phone number</label><input class="form-control" id="booking-phone" name="phone" type="tel" autocomplete="tel" maxlength="25" required value="<?= e($form['phone']) ?>"></div>
                        <div class="col-12"><label for="booking-email" class="form-label">Email address</label><input class="form-control" id="booking-email" name="email" type="email" autocomplete="email" maxlength="254" required value="<?= e($form['email']) ?>"></div>
                        <div class="col-12"><label for="booking-service" class="form-label">Service</label><select class="form-select" id="booking-service" name="service" required><option value="">Choose a service</option><?php foreach ($services as $service): ?><option value="<?= e($service['name']) ?>" <?= $form['service'] === $service['name'] ? 'selected' : '' ?>><?= e($serviceCategories[$service['category']] . ' — ' . $service['name']) ?></option><?php endforeach; ?></select></div>
                        <div class="col-md-6"><label for="booking-date" class="form-label">Preferred date</label><input class="form-control" id="booking-date" name="date" type="date" min="<?= e($today) ?>" required value="<?= e($form['date']) ?>"></div>
                        <div class="col-md-6"><label for="booking-time" class="form-label">Preferred time</label><input class="form-control" id="booking-time" name="time" type="time" min="09:00" max="19:00" required value="<?= e($form['time']) ?>"></div>
                        <div class="col-12"><label for="booking-message" class="form-label">Anything else we should know? <span class="optional-label">(optional)</span></label><textarea class="form-control" id="booking-message" name="message" rows="4" maxlength="1000"><?= e($form['message']) ?></textarea></div>
                        <div class="col-12"><button type="submit" class="btn btn-dark-gold w-100">Book Appointment <span aria-hidden="true">↗</span></button></div>
                    </div>
                    <p class="form-note">Demo request only — form details are not stored or sent. Your appointment is confirmed only after direct contact with the salon.</p>
                </form>
            <?php endif; ?>
        </div>
    </div>
    <aside class="col-lg-5"><div class="booking-aside reveal"><img src="https://images.unsplash.com/photo-1600334129128-685c5582fd35?auto=format&fit=crop&w=1000&q=82" alt="A peaceful beauty and wellness treatment room" loading="lazy" width="800" height="1000"><div class="booking-aside-copy"><span class="eyebrow light-eyebrow">WE LOOK FORWARD TO MEETING YOU</span><h2>A moment<br><em>that’s all yours.</em></h2><p>Abuja, Nigeria<br>Monday – Saturday, 9:00 AM – 7:00 PM<br>Sunday by appointment</p><?php if (whatsapp_url() !== ''): ?><a href="<?= e(whatsapp_url()) ?>" class="text-link light-link" target="_blank" rel="noopener noreferrer">Prefer WhatsApp? Message us <span aria-hidden="true">↗</span></a><?php else: ?><p class="small mb-0">WhatsApp booking will be available once the salon number is configured.</p><?php endif; ?></div></div></aside>
</div></div></section>
<?php require __DIR__ . '/includes/footer.php'; ?>
