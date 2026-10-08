<?php
$pageTitle = 'Beauty Emporia | Premium Beauty Salon in Abuja';
$metaDescription = 'Beauty Emporia is a premium beauty salon in Abuja offering professional hair, nails, makeup, spa and beauty services.';
$activePage = 'home';
require __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/services-data.php';
?>
<section class="hero-section">
    <div class="hero-image" role="img" aria-label="Elegant beauty portrait representing the Beauty Emporia salon experience"></div>
    <div class="hero-shade"></div>
    <div class="container hero-content">
        <div class="hero-copy reveal">
            <span class="eyebrow light-eyebrow">A BEAUTY DESTINATION · ABUJA</span>
            <h1>Your Beauty.<br>Your Confidence.<br><em>Your Emporia.</em></h1>
            <p>Experience premium beauty, hair, nail and wellness services in the heart of Abuja.</p>
            <div class="hero-actions">
                <a class="btn btn-gold" href="booking.php">Book an Appointment <span aria-hidden="true">↗</span></a>
                <a class="btn btn-outline-light" href="services.php">Explore Our Services</a>
            </div>
        </div>
        <div class="hero-caption"><span>01 / 04</span><span>BEAUTY, THOUGHTFULLY PERSONAL</span></div>
    </div>
</section>
<section class="trust-strip" aria-label="Why choose Beauty Emporia">
    <div class="container">
        <div class="row g-3 text-center">
            <div class="col-6 col-lg-3"><span class="trust-icon">✳</span><p>Premium Beauty Services</p></div>
            <div class="col-6 col-lg-3"><span class="trust-icon">✧</span><p>Experienced Beauty Professionals</p></div>
            <div class="col-6 col-lg-3"><span class="trust-icon">◇</span><p>Luxury Salon Experience</p></div>
            <div class="col-6 col-lg-3"><span class="trust-icon">⌖</span><p>Located in Abuja</p></div>
        </div>
    </div>
</section>
<section class="section-pad about-teaser">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 reveal">
                <div class="image-frame about-image">
                    <img src="<?= e(service_image('photo-1600334129128-685c5582fd35', 1200)) ?>" alt="Calm, welcoming beauty and wellness studio" loading="lazy" width="900" height="1100">
                    <span class="image-stamp">A little time<br>for yourself</span>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5 reveal">
                <span class="eyebrow">WELCOME TO BEAUTY EMPORIA</span>
                <h2 class="section-title">Beauty is personal.<br><em>Your experience should be, too.</em></h2>
                <p class="lead-copy">Beauty Emporia is a modern beauty destination dedicated to helping every client look and feel their absolute best. From professional hair styling and flawless makeup to luxurious nail and beauty treatments, we bring skill, quality products and thoughtful service together.</p>
                <div class="feature-list">
                    <span>Experienced professionals</span><span>Premium products</span>
                    <span>Personalised service</span><span>A comfortable environment</span>
                </div>
                <a class="text-link mt-4 d-inline-flex" href="about.php">Get to know us <span aria-hidden="true">↗</span></a>
            </div>
        </div>
    </div>
</section>
<section class="section-pad section-soft">
    <div class="container">
        <div class="section-heading text-center reveal">
            <span class="eyebrow">A MOMENT, MADE YOURS</span>
            <h2 class="section-title">Considered care. <em>Beautiful results.</em></h2>
            <p>Explore the services that make your next visit something to look forward to.</p>
        </div>
        <div class="row g-4 mt-3">
            <?php foreach (array_slice($services, 0, 3) as $service): ?>
                <div class="col-md-6 col-lg-4"><?php require __DIR__ . '/includes/service-card.php'; ?></div>
            <?php endforeach; ?>
        </div>
        <p class="pricing-note text-center mt-3">Any prices shown are illustrative demo prices only; please confirm current pricing with the salon.</p>
        <div class="text-center mt-5"><a href="services.php" class="btn btn-outline-dark">Discover all services <span aria-hidden="true">↗</span></a></div>
    </div>
</section>
<section class="offer-band">
    <div class="container">
        <div class="offer-inner reveal">
            <span class="eyebrow light-eyebrow">A WARM WELCOME</span>
            <h2>New Client<br><em>Beauty Experience</em></h2>
            <p>Enjoy a special welcome offer on your first visit. Ask our team about current offers when you book.</p>
            <a class="btn btn-gold" href="booking.php">Book Your First Appointment <span aria-hidden="true">↗</span></a>
            <small>Offer details may vary and are confirmed by the salon.</small>
        </div>
    </div>
</section>
<section class="section-pad">
    <div class="container">
        <div class="section-heading text-center reveal">
            <span class="eyebrow">KIND WORDS, SAMPLE STORIES</span>
            <h2 class="section-title">The beauty of <em>feeling at home.</em></h2>
            <p class="sample-disclaimer">Sample testimonials for presentation only — replace with verified client feedback before launch.</p>
        </div>
        <div class="row g-4 mt-3">
            <?php
            $testimonials = [
                ['Beautiful atmosphere, professional service and my hair came out exactly how I wanted.', 'Ada O.'],
                ['I felt looked after from the moment I arrived. Such a lovely, relaxing experience.', 'Mariam K.'],
                ['The attention to detail was wonderful. I left feeling completely refreshed.', 'Tomi A.'],
            ];
            foreach ($testimonials as [$quote, $name]):
            ?>
                <div class="col-md-4"><blockquote class="testimonial-card reveal"><span class="quote-mark">“</span><p><?= e($quote) ?></p><footer>— <?= e($name) ?> <span>Sample name</span></footer></blockquote></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
