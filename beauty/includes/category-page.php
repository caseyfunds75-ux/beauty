<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/services-data.php';
$categoryTitles = ['hair' => 'Hair', 'nails' => 'Nails', 'makeup' => 'Makeup', 'spa' => 'Spa & Beauty'];
$categoryTitle = $categoryTitles[$categoryPage] ?? '';
$pageTitle = $categoryTitle . ' Services | Beauty Emporia Abuja';
$activePage = 'services';
require __DIR__ . '/header.php';
?>
<section class="page-hero"><div class="container reveal"><span class="eyebrow">THE EMPORIA MENU</span><h1><?= e($categoryTitle) ?>,<br><em>beautifully considered.</em></h1><p>Explore our <?= e(strtolower($categoryTitle)) ?> services, delivered with care in Abuja.</p></div></section>
<section class="section-pad"><div class="container">
    <p class="pricing-note">Prices shown are illustrative demo prices only and may change. Please confirm your quote with the salon before booking.</p>
    <div class="row g-4">
        <?php foreach ($services as $service): if ($service['category'] !== $categoryPage) continue; ?>
            <div class="col-md-6 col-lg-4"><?php require __DIR__ . '/service-card.php'; ?></div>
        <?php endforeach; ?>
    </div>
    <div class="text-center mt-5"><a class="text-link" href="services.php">View all services <span aria-hidden="true">↗</span></a></div>
</div></section>
<?php require __DIR__ . '/footer.php'; ?>
