<?php

return [

    // PayPal Client ID
    'client_id' => env('PAYPAL_CLIENT_ID', ''),

    // PayPal Client Secret
    'client_secret' => env('PAYPAL_CLIENT_SECRET', ''),

    // Configurations
    // All api context config supported by PayPal
    // can be added here
    'config' => [
        'mode' => env('PAYPAL_CONFIG_MODE', ''),
    ]

];