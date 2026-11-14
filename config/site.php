<?php

/*
|--------------------------------------------------------------------------
| Site content shared by several pages
|--------------------------------------------------------------------------
| Values copied unchanged from the original HTML site so that repeated
| blocks (client logos, testimonials) are maintained in one place.
*/

return [

    'name' => 'RAD Best Business Group',

    // Where contact-form enquiries are emailed (see App\Mail\ContactMessageReceived).
    'contact_recipient' => env('CONTACT_RECIPIENT', 'info@radbesttrading.com'),

    // Client logo marquee — public/assets/img/clients/{file}
    'clients' => [
        ['file' => 'eeig.png', 'name' => 'EEIG Construction'],
        ['file' => 'royal-coffee.png', 'name' => 'Royal Coffee Roasters'],
        ['file' => 'amaga.png', 'name' => 'Amaga PLC'],
        ['file' => 'unity-university.png', 'name' => 'Unity University'],
        ['file' => 'portugal-embassy.png', 'name' => 'Portugal Embassy'],
        ['file' => 'esx.png', 'name' => 'Ethiopian Securities Exchange'],
        ['file' => 'biftu-adugna.png', 'name' => 'Biftu Adugna Business s.c'],
        ['file' => 'eec.png', 'name' => 'EEC'],
        ['file' => 'addis-walta.png', 'name' => 'Addis Walta'],
        ['file' => 'ministry-of-health.png', 'name' => 'Ministry of Health Ethiopia'],
        ['file' => 'nisir.png', 'name' => 'NISIR Microfinance'],
        ['file' => 'mugo.png', 'name' => 'MUGO'],
        ['file' => 'national-reha.png', 'name' => 'National REHA'],
        ['file' => 'cbe.png', 'name' => 'CBE'],
        ['file' => 'romina.png', 'name' => 'Romina'],
    ],

    // Testimonial slider — referenced by key from the page views.
    'testimonials' => [
        'royal-coffee' => [
            'logo' => 'royal-coffee.png',
            'name' => 'Royal Coffee',
            'role' => 'RAD Best Coffee client',
            'quote' => "RAD Best Coffee's Yirgacheffe beans are a revelation! Bright, floral aromas and a smooth finish make every cup a delightful experience. A true taste of Ethiopia!",
        ],
        'amaga' => [
            'logo' => 'amaga.png',
            'name' => 'Amaga PLC',
            'role' => 'RAD Best Manufacturing client',
            'quote' => 'RAD Best Manufacturing is a reliable partner. Their commitment to quality and innovation ensures we get the best textiles for our clothing line. Proudly supporting Ethiopian-made!',
        ],
        'eeig' => [
            'logo' => 'eeig.png',
            'name' => 'EEIG Construction',
            'role' => 'RAD Best Trading client',
            'quote' => 'We partnered with RAD Best Trading for an office renovation project. Their top-notch products and exceptional service exceeded our expectations!',
        ],
    ],

];
