<?php
declare(strict_types=1);

const SITE_NAME = 'Beauty Emporia';
const SITE_LOCATION = 'Abuja, Nigeria';

// Replace these placeholders with verified business details before launch.
const BUSINESS_PHONE = '[ADD PHONE NUMBER]';
const BUSINESS_EMAIL = '[ADD EMAIL]';
const WHATSAPP_NUMBER = ''; // International digits only, e.g. 2348012345678.
const MAXWEB_PORTFOLIO_URL = '#';

const SITE_DESCRIPTION = 'Beauty Emporia is a premium beauty salon in Abuja offering professional hair, nails, makeup, spa and beauty services.';

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function whatsapp_url(string $message = ''): string
{
    $number = preg_replace('/\D+/', '', WHATSAPP_NUMBER);
    if ($number === '') {
        return '';
    }

    return 'https://wa.me/' . $number . ($message !== '' ? '?text=' . rawurlencode($message) : '');
}

function whatsapp_display(): string
{
    return preg_replace('/\D+/', '', WHATSAPP_NUMBER) ?: 'Number to be configured';
}
