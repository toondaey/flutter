<?php

return [
    /**
     * This can be live or sandbox
     */
    'default' => env('RAVE_ENV', 'live'),

    /**
     * @see https://flutterwavedevelopers.readme.io/reference#api-request-and-response-standards
     */
    'urls' => [
        'live' => 'https://ravesandboxapi.flutterwave.com',
        'sandbox' => 'https://api.ravepay.co',
    ],
    /**
     * ---------------------------------------------------------
     * Keys generated from the ravesandbox.
     * @see https://ravesandbox.flutterwave.com
     * ---------------------------------------------------------
     */
    'keys' => [
        'public' => env('FLW_PUB', 'get your key'),
        'secret' => env('FLW_SEC', 'get your key'),
    ]
];
