<?php
declare(strict_types=1);
require_once __DIR__ . '/../config/config.php';
?>
</main>
<footer class="site-footer">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4">
                <a class="brand-mark footer-brand" href="index.php"><span>BEAUTY</span><strong>EMPORIA</strong></a>
                <p class="footer-copy mt-3">A thoughtful beauty experience, made personal. Discover your next favourite look in the heart of Abuja.</p>
                <div class="social-links" aria-label="Social media links">
                    <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" aria-label="Instagram (add verified salon profile)">IG</a>
                    <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" aria-label="Facebook (add verified salon profile)">f</a>
                    <?php if (whatsapp_url() !== ''): ?><a href="<?= e(whatsapp_url()) ?>" target="_blank" rel="noopener noreferrer" aria-label="Chat with Beauty Emporia on WhatsApp">WA</a><?php endif; ?>
                </div>
                <p class="footer-note">Social links are placeholders; update them with verified salon profiles.</p>
            </div>
            <div class="col-6 col-lg-2">
                <h2 class="footer-heading">Explore</h2>
                <ul class="footer-list">
                    <li><a href="about.php">About us</a></li><li><a href="services.php">Services</a></li>
                    <li><a href="gallery.php">Gallery</a></li><li><a href="booking.php">Book an appointment</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-3">
                <h2 class="footer-heading">Our services</h2>
                <ul class="footer-list">
                    <li><a href="hair.php">Hair</a></li><li><a href="nails.php">Nails</a></li>
                    <li><a href="makeup.php">Makeup</a></li><li><a href="spa.php">Spa &amp; beauty</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h2 class="footer-heading">Visit us</h2>
                <ul class="footer-list footer-contact">
                    <li>Abuja, Nigeria</li>
                    <li><?php if (BUSINESS_PHONE !== '[ADD PHONE NUMBER]'): ?><a href="tel:<?= e(preg_replace('/[^0-9+]/', '', BUSINESS_PHONE)) ?>"><?= e(BUSINESS_PHONE) ?></a><?php else: ?><?= e(BUSINESS_PHONE) ?><?php endif; ?></li>
                    <li><?php if (BUSINESS_EMAIL !== '[ADD EMAIL]'): ?><a href="mailto:<?= e(BUSINESS_EMAIL) ?>"><?= e(BUSINESS_EMAIL) ?></a><?php else: ?><?= e(BUSINESS_EMAIL) ?><?php endif; ?></li>
                    <li>Mon – Sat: 9:00 AM – 7:00 PM</li>
                    <li>Sun: By appointment</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between gap-2">
            <span>© 2026 Beauty Emporia. All Rights Reserved.</span>
            <span>Website by <a href="<?= e(MAXWEB_PORTFOLIO_URL) ?>" <?= MAXWEB_PORTFOLIO_URL !== '#' ? 'target="_blank" rel="noopener noreferrer"' : '' ?>>MAXWEB</a></span>
        </div>
    </div>
</footer>
<?php if (whatsapp_url() !== ''): ?>
    <a class="whatsapp-float" href="<?= e(whatsapp_url('Hello Beauty Emporia, I would like to make an appointment.')) ?>" target="_blank" rel="noopener noreferrer" aria-label="Book with Beauty Emporia on WhatsApp">WhatsApp <span aria-hidden="true">↗</span></a>
<?php else: ?>
    <a class="whatsapp-float" href="booking.php" aria-label="Book an appointment">Book a visit <span aria-hidden="true">↗</span></a>
<?php endif; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="assets/js/main.js" defer></script>
</body>
</html>
