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

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'midtrans' => [
    'serverKey' => env('MIDTRANS_SERVERKEY', 'SB-Mid-server-D8wG47EQNhcMavRpQLjNwjh_'), // Default server key jika tidak ada di .env
    'clientKey' => env('MIDTRANS_CLIENTKEY', 'SB-Mid-client-QzoyLn0GzLVCmTRC'), // Default client key jika tidak ada di .env
    'isProduction' => env('MIDTRANS_IS_PRODUCTION', false), // Default: Sandbox mode
    'isSanitized' => env('MIDTRANS_IS_SANITIZED', true), // Sanitized inputs
    'is3ds' => env('MIDTRANS_IS_3DS', true), // Use 3DSecure
],



];
