<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'paypal_sandbox' => [
        'email' => env('PAYPAL_SANDBOX_EMAIL'),
        'client_id' => env('ATRb_wexrUUXtS-m8Xeug24EPcRvhWMV39i3kKtrdxex387N10BnCGwkrisvHB2B10ljU7g21iyxBzpY'),
        'secret' => env('EAeCcKAqW9VaSDQ3ZA2RU5etIjeK0fRe2csofz_OlOxAUod-tlrLPJv8TWl27UUBtBjCn0LTdxXpY5cA'),
    ],

    'paypal_live' => [

    ]

];
