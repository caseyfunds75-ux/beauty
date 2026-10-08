<?php
$pageTitle = 'Beauty Services | Beauty Emporia Abuja';
$metaDescription = 'Explore hair, nail, makeup and spa services at Beauty Emporia in Abuja. Book a personalised beauty appointment.';
$activePage = 'services';
require __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/services-data.php';
?>
<section class="page-hero"><div class="container reveal"><span class="eyebrow">THE EMPORIA MENU</span><h1>Find your kind<br><em>of beautiful.</em></h1><p>Considered beauty services, delivered with care in Abuja.</p></div></section>
<section class="section-pad services-section">
    <div class="container">
        <div class="filter-bar reveal" role="group" aria-label="Filter services by category">
            <button class="filter-button active" type="button" data-filter="all" aria-pressed="true">All services</button>
            <?php foreach ($serviceCategories as $key => $label): ?><button class="filter-button" type="button" data-filter="<?= e($key) ?>" aria-pressed="false"><?= e($label) ?></button><?php endforeach; ?>
        </div>
        <p class="pricing-note">Prices shown are illustrative demo prices only and may change. Please confirm your quote with the salon before booking.</p>
        <div class="row g-4 service-grid" id="service-grid" aria-live="polite">
            <?php foreach ($services as $service): ?><div class="col-md-6 col-lg-4 service-column"><?php require __DIR__ . '/includes/service-card.php'; ?></div><?php endforeach; ?>
        </div>
        <div class="empty-filter d-none" id="empty-filter">No services are available in this category yet.</div>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
