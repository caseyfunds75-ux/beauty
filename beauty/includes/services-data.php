<?php
declare(strict_types=1);

$serviceCategories = [
    'hair' => 'Hair',
    'nails' => 'Nails',
    'makeup' => 'Makeup',
    'spa' => 'Spa & Beauty',
];

$services = [
    ['category' => 'hair', 'name' => 'Hair Styling', 'description' => 'A polished style tailored to your occasion, texture and personal look.', 'price' => 'From ₦15,000', 'image' => 'photo-1560869713-7d0a29430803'],
    ['category' => 'hair', 'name' => 'Braiding', 'description' => 'Beautiful protective styles, created with care and a comfortable finish.', 'price' => 'From ₦25,000', 'image' => 'photo-1605980625600-88d6b19dc7e6'],
    ['category' => 'hair', 'name' => 'Wig Installation', 'description' => 'A secure, seamless install finished to complement your features.', 'price' => 'From ₦20,000', 'image' => 'photo-1524504388940-b1c1722653e1'],
    ['category' => 'hair', 'name' => 'Wig Revamp', 'description' => 'Refresh, restyle and bring new life to your favourite wig.', 'price' => 'From ₦18,000', 'image' => 'photo-1483985988355-763728e1935b'],
    ['category' => 'hair', 'name' => 'Natural Hair Care', 'description' => 'Gentle, texture-conscious care that supports your natural hair journey.', 'price' => 'From ₦12,000', 'image' => 'photo-1529139574466-a303027c1d8b'],
    ['category' => 'hair', 'name' => 'Hair Treatment', 'description' => 'A restorative treatment selected for your hair’s individual needs.', 'price' => 'From ₦15,000', 'image' => 'photo-1512316609839-ce289d3eba0a'],
    ['category' => 'hair', 'name' => 'Hair Coloring', 'description' => 'A considered colour refresh with a consultation before we begin.', 'price' => 'Consultation', 'image' => 'photo-1525507119028-ed4c629a60a3'],
    ['category' => 'nails', 'name' => 'Classic Manicure', 'description' => 'Thoughtful nail and cuticle care with a clean, beautifully finished polish.', 'price' => 'From ₦10,000', 'image' => 'photo-1610992015732-2449b76344bc'],
    ['category' => 'nails', 'name' => 'Luxury Manicure', 'description' => 'An elevated manicure experience with extra care and a relaxing finish.', 'price' => 'From ₦18,000', 'image' => 'photo-1604654894610-df63bc536371'],
    ['category' => 'nails', 'name' => 'Pedicure', 'description' => 'A restorative foot treatment for a refreshed, soft and polished feel.', 'price' => 'From ₦15,000', 'image' => 'photo-1519014816548-bf5fe059798b'],
    ['category' => 'nails', 'name' => 'Gel Nails', 'description' => 'A glossy, long-wearing finish in a shade you’ll love.', 'price' => 'From ₦15,000', 'image' => 'photo-1632345031435-8727f6897d53'],
    ['category' => 'nails', 'name' => 'Acrylic Nails', 'description' => 'Custom length and shape, expertly applied and finished.', 'price' => 'From ₦20,000', 'image' => 'photo-1610992015732-2449b76344bc'],
    ['category' => 'nails', 'name' => 'Nail Art', 'description' => 'Personalised details, from understated accents to expressive designs.', 'price' => 'From ₦5,000', 'image' => 'photo-1604654894610-df63bc536371'],
    ['category' => 'makeup', 'name' => 'Soft Glam', 'description' => 'A luminous, beautifully blended look that still feels like you.', 'price' => 'From ₦35,000', 'image' => 'photo-1488426862026-3ee34a7d66df'],
    ['category' => 'makeup', 'name' => 'Full Glam', 'description' => 'A camera-ready statement look, thoughtfully tailored to your style.', 'price' => 'From ₦45,000', 'image' => 'photo-1524504388940-b1c1722653e1'],
    ['category' => 'makeup', 'name' => 'Bridal Makeup', 'description' => 'A personalised bridal beauty experience for your unforgettable day.', 'price' => 'Consultation', 'image' => 'photo-1519741497674-611481863552'],
    ['category' => 'makeup', 'name' => 'Birthday / Event Makeup', 'description' => 'Feel your best for celebrations, special occasions and everything between.', 'price' => 'From ₦40,000', 'image' => 'photo-1529626455594-4ff0802cfb7e'],
    ['category' => 'makeup', 'name' => 'Photoshoot Makeup', 'description' => 'A considered, camera-conscious finish for your next shoot.', 'price' => 'From ₦45,000', 'image' => 'photo-1534528741775-53994a69daeb'],
    ['category' => 'spa', 'name' => 'Facial Treatment', 'description' => 'A refreshing facial selected with your skin goals in mind.', 'price' => 'From ₦25,000', 'image' => 'photo-1570172619644-dfd03ed5d881'],
    ['category' => 'spa', 'name' => 'Eyebrow Shaping', 'description' => 'A gentle shape designed to bring out your natural features.', 'price' => 'From ₦8,000', 'image' => 'photo-1512316609839-ce289d3eba0a'],
    ['category' => 'spa', 'name' => 'Eyelash Extensions', 'description' => 'A customised lash look, applied with care for a comfortable finish.', 'price' => 'From ₦25,000', 'image' => 'photo-1517841905240-472988babdf9'],
    ['category' => 'spa', 'name' => 'Body Scrub', 'description' => 'A renewing body treatment for a silky, refreshed feeling.', 'price' => 'From ₦30,000', 'image' => 'photo-1540555700478-4be289fbeccb'],
    ['category' => 'spa', 'name' => 'Relaxation Treatment', 'description' => 'Take a pause with a restorative treatment in a calming setting.', 'price' => 'From ₦35,000', 'image' => 'photo-1544161515-4ab6ce6db874'],
];

function service_image(string $photo, int $width = 900): string
{
    return 'https://images.unsplash.com/' . rawurlencode($photo) . '?auto=format&fit=crop&w=' . $width . '&q=82';
}
