<?php

return [

    'lifetime' => 10, // Session will last for 10 minutes of inactivity
    'expire_on_close' => true, // Expire session when the browser is closed

    // Other session settings...
    'driver' => env('SESSION_DRIVER', 'file'),
    'encrypt' => false,
    'files' => storage_path('framework/sessions'),
    'cookie' => env('SESSION_COOKIE', 'laravel_session'),
    'path' => '/',
    'domain' => env('SESSION_DOMAIN', null),
    'secure' => env('SESSION_SECURE_COOKIE', false),
    'http_only' => true,
    'same_site' => 'lax',
];
