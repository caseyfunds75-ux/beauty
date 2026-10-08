<?php
$pageTitle = 'Contact | Beauty Emporia Abuja';
$metaDescription = 'Contact Beauty Emporia in Abuja to plan your beauty salon visit.';
$activePage = 'contact';
require __DIR__ . '/includes/header.php';
require_once __DIR__ . '/config/config.php';
?>
<section class="page-hero"><div class="container reveal"><span class="eyebrow">WE’D LOVE TO HEAR FROM YOU</span><h1>Let’s start a<br><em>conversation.</em></h1><p>Questions about a service or planning a visit? We’re here to help.</p></div></section>
<section class="section-pad"><div class="container"><div class="row g-5">
    <div class="col-lg-5 reveal"><span class="eyebrow">GET IN TOUCH</span><h2 class="section-title">Your next visit<br><em>starts here.</em></h2>
        <div class="contact-list">
            <div><span class="contact-icon">⌖</span><div><h3>Find us</h3><p>Beauty Emporia<br>Abuja, Nigeria<br><small>Exact salon address to be confirmed.</small></p></div></div>
            <div><span class="contact-icon">◷</span><div><h3>Opening hours</h3><p>Monday – Saturday<br>9:00 AM – 7:00 PM<br><br>Sunday<br>By appointment</p></div></div>
            <div><span class="contact-icon">✉</span><div><h3>Reach our team</h3><p>Phone: <?= e(BUSINESS_PHONE) ?><br>WhatsApp: <?= e(whatsapp_display()) ?><br>Email: <?= e(BUSINESS_EMAIL) ?></p><?php if (BUSINESS_PHONE !== '[ADD PHONE NUMBER]'): ?><a class="text-link" href="tel:<?= e(preg_replace('/[^0-9+]/', '', BUSINESS_PHONE)) ?>">Call the salon <span aria-hidden="true">↗</span></a><?php endif; ?><?php if (BUSINESS_EMAIL !== '[ADD EMAIL]'): ?><a class="text-link d-block mt-2" href="mailto:<?= e(BUSINESS_EMAIL) ?>">Email the salon <span aria-hidden="true">↗</span></a><?php endif; ?><?php if (whatsapp_url() !== ''): ?><a class="text-link d-block mt-2" href="<?= e(whatsapp_url()) ?>" target="_blank" rel="noopener noreferrer">Message us on WhatsApp <span aria-hidden="true">↗</span></a><?php endif; ?></div></div>
        </div>
        <a href="booking.php" class="btn btn-dark-gold mt-3">Book an appointment <span aria-hidden="true">↗</span></a>
    </div>
    <div class="col-lg-7 reveal">
        <div class="map-placeholder" role="img" aria-label="Location placeholder showing Abuja, Nigeria; exact Beauty Emporia address is not yet available">
            <div class="map-grid"></div><span class="map-pin">⌖</span><div class="map-label"><strong>Beauty Emporia</strong><span>Abuja, Nigeria</span><small>Location placeholder · exact address to be confirmed</small></div>
            <a class="map-link" href="https://www.google.com/maps/search/?api=1&query=Abuja%2C+Nigeria" target="_blank" rel="noopener noreferrer">Explore Abuja on Google Maps ↗</a>
        </div>
    </div>
</div></div></section>
<?php require __DIR__ . '/includes/footer.php'; ?>
