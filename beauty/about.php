<?php
$pageTitle = 'About Us | Beauty Emporia Abuja';
$activePage = 'about';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="container reveal"><span class="eyebrow">OUR STORY · ABUJA</span><h1>A beauty experience<br><em>that feels like you.</em></h1><p>Thoughtful service, skilled hands and a little room to breathe.</p></div>
</section>
<section class="section-pad">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 reveal"><div class="image-frame"><img src="https://images.unsplash.com/photo-1521590832167-7bcbfaa6381f?auto=format&fit=crop&w=1200&q=82" alt="Bright and welcoming beauty salon interior" loading="lazy" width="900" height="1100"></div></div>
            <div class="col-lg-6 ps-lg-5 reveal">
                <span class="eyebrow">BEAUTY, WITH INTENTION</span>
                <h2 class="section-title">A little more care<br><em>in every detail.</em></h2>
                <p class="lead-copy">Beauty Emporia is a modern beauty salon dedicated to helping every client look and feel their absolute best. From professional hair styling and flawless makeup to luxurious nail and beauty treatments, we combine skilled professionals, quality products and personalised service to create an unforgettable beauty experience.</p>
                <p class="body-copy">Rooted in Abuja, we believe great beauty care begins with listening. Every visit is shaped around you — your preferences, your plans and the way you want to feel when you leave.</p>
                <a href="booking.php" class="btn btn-dark-gold mt-3">Plan your visit <span aria-hidden="true">↗</span></a>
            </div>
        </div>
    </div>
</section>
<section class="section-pad section-soft">
    <div class="container"><div class="section-heading text-center reveal"><span class="eyebrow">THE EMPORIA PROMISE</span><h2 class="section-title">The things that make it <em>personal.</em></h2></div>
        <div class="row g-4 mt-3">
            <?php foreach ([['01', 'Experienced professionals', 'A thoughtful team that listens, advises and brings care to every appointment.'], ['02', 'Premium products', 'Quality products selected with comfort, care and beautiful results in mind.'], ['03', 'Personalised service', 'Recommendations and treatments shaped around your preferences.'], ['04', 'A comfortable environment', 'A welcoming space to slow down, settle in and enjoy a moment for yourself.']] as [$number, $title, $copy]): ?>
                <div class="col-sm-6 col-lg-3"><article class="promise-card reveal"><span><?= e($number) ?></span><h3><?= e($title) ?></h3><p><?= e($copy) ?></p></article></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
