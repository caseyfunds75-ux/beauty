<?php
$pageTitle = 'Gallery | Beauty Emporia Abuja';
$metaDescription = 'Explore the Beauty Emporia gallery for hair, nails, makeup and salon inspiration in Abuja.';
$activePage = 'gallery';
require __DIR__ . '/includes/header.php';
$galleryItems = [
    ['photo-1560869713-7d0a29430803', 'Hair styling', 'Polished hair styling'],
    ['photo-1605980625600-88d6b19dc7e6', 'Braids', 'Protective braid styling'],
    ['photo-1524504388940-b1c1722653e1', 'Beauty look', 'Finished beauty look'],
    ['photo-1610992015732-2449b76344bc', 'Nail art', 'Elegant nail detailing'],
    ['photo-1519014816548-bf5fe059798b', 'Pedicure', 'A restorative pedicure'],
    ['photo-1521590832167-7bcbfaa6381f', 'Salon interior', 'Welcoming salon interior'],
    ['photo-1483985988355-763728e1935b', 'Client transformation', 'Beauty inspiration'],
    ['photo-1570172619644-dfd03ed5d881', 'Facial care', 'A moment of facial care'],
    ['photo-1534528741775-53994a69daeb', 'Makeup', 'Makeup artistry inspiration'],
];
?>
<section class="page-hero"><div class="container reveal"><span class="eyebrow">A LITTLE INSPIRATION</span><h1>Beauty, in all<br><em>its expressions.</em></h1><p>A moodboard of the looks, details and moments we love.</p></div></section>
<section class="section-pad gallery-section"><div class="container">
    <p class="pricing-note">Editorial imagery shown for demonstration. Replace with Beauty Emporia’s own work and obtain permission before publishing client photographs.</p>
    <div class="gallery-grid">
        <?php foreach ($galleryItems as $index => [$photo, $alt, $caption]): $image = 'https://images.unsplash.com/' . rawurlencode($photo) . '?auto=format&fit=crop&w=1000&q=82'; ?>
            <button class="gallery-item <?= $index % 5 === 1 || $index % 5 === 3 ? 'gallery-tall' : '' ?>" type="button" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="<?= e($image) ?>" data-alt="<?= e($alt) ?>" aria-label="View image: <?= e($caption) ?>">
                <img src="<?= e($image) ?>" alt="<?= e($alt) ?>" loading="lazy" width="800" height="900">
                <span><?= e($caption) ?> <span aria-hidden="true">↗</span></span>
            </button>
        <?php endforeach; ?>
    </div>
</div></section>
<div class="modal fade gallery-modal" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content"><div class="modal-header"><h2 class="modal-title" id="galleryModalLabel">Beauty Emporia inspiration</h2><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close image"></button></div><div class="modal-body"><img id="galleryModalImage" src="" alt=""></div></div></div>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>
