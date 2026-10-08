<article class="service-card reveal" data-category="<?= e($service['category']) ?>">
    <a class="service-image" href="booking.php?service=<?= rawurlencode($service['name']) ?>" aria-label="Book <?= e($service['name']) ?>">
        <img src="<?= e(service_image($service['image'], 720)) ?>" alt="<?= e($service['name']) ?> at Beauty Emporia" loading="lazy" width="720" height="520">
    </a>
    <div class="service-card-body">
        <span class="eyebrow"><?= e($serviceCategories[$service['category']]) ?></span>
        <h3><?= e($service['name']) ?></h3>
        <p><?= e($service['description']) ?></p>
        <div class="d-flex justify-content-between align-items-center gap-2 mt-auto">
            <span class="service-price"><?= e($service['price']) ?></span>
            <a class="text-link" href="booking.php?service=<?= rawurlencode($service['name']) ?>">Book now <span aria-hidden="true">↗</span></a>
        </div>
    </div>
</article>
