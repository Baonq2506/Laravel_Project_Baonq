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

    'google' => [
        'client_id'     => '823171311445-h2eqi9giv708iqn5s6lbflnbpprakf4b.apps.googleusercontent.com',
        'client_secret' =>'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',
        'redirect'      => 'https://project-baonq.herokuapp.com/auth/home/google',
    ],

    'facebook' => [
        'client_id' => '562504408369572',
        'client_secret' =>'a19d3fb1e72889580ee0e2cd8f976c33',
        'redirect' => 'https://project-baonq.herokuapp.com/auth/home/facebook',
    ],
    //     GOOGLE_CLIENT_ID=823171311445-h2eqi9giv708iqn5s6lbflnbpprakf4b.apps.googleusercontent.com
    // GOOGLE_CLIENT_SECRET=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
    // GOOGLE_REDIRECT=https://project-baonq.herokuapp.com/auth/home/google

// FACEBOOK_APP_ID =562504408369572
// FACEBOOK_APP_SECRET =a19d3fb1e72889580ee0e2cd8f976c33
// FACEBOOK_APP_CALLBACK_URL = https://project-baonq.herokuapp.com/auth/home/facebook


];
