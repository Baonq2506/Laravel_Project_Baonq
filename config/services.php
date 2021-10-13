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
        'client_id' => '1074488865876-shcuupl3v8mde6ugrkgfe2j1sgiu8qvs.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'https://project-baonq.herokuapp.com/auth/google/callback',
    ],

    'facebook' => [
        'client_id' => '1056846975077786',
        'client_secret' => '735680744a167dd48df5d90d5ebe1397',
        'redirect' => 'https://project-baonq.herokuapp.com/auth/facebook/callback',
    ],



];
