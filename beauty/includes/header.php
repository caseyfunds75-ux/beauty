<?php
declare(strict_types=1);

require_once __DIR__ . '/../config/config.php';
$pageTitle = $pageTitle ?? 'Beauty Emporia | Premium Beauty Salon in Abuja';
$metaDescription = $metaDescription ?? SITE_DESCRIPTION;
$activePage = $activePage ?? '';
$whatsappLink = whatsapp_url();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= e($metaDescription) ?>">
    <meta name="theme-color" content="#f8f4ee">
    <title><?= e($pageTitle) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://images.unsplash.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<a class="skip-link" href="#main-content">Skip to content</a>
<nav class="navbar navbar-expand-lg site-nav sticky-top" aria-label="Main navigation">
    <div class="container">
        <a class="navbar-brand brand-mark" href="index.php" aria-label="Beauty Emporia home">
            <span>BEAUTY</span><strong>EMPORIA</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item"><a class="nav-link <?= $activePage === 'home' ? 'active' : '' ?>" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= $activePage === 'about' ? 'active' : '' ?>" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link <?= $activePage === 'services' ? 'active' : '' ?>" href="services.php">Services</a></li>
                <li class="nav-item"><a class="nav-link <?= $activePage === 'gallery' ? 'active' : '' ?>" href="gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link <?= $activePage === 'contact' ? 'active' : '' ?>" href="contact.php">Contact</a></li>
                <li class="nav-item ms-lg-3"><a class="btn btn-dark-gold nav-book" href="booking.php">Book Now <span aria-hidden="true">↗</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<main id="main-content">
