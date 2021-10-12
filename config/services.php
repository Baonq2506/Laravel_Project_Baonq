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
        'client_id' => '823171311445-0tdqlvfuv2kn2q7g18tj6a9s50qioggb.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'https://project-baonq.herokuapp.com/auth/google/callback',
    ],

    'facebook' => [
        'client_id' => '566708737876781',
        'client_secret' => '83e2c646b61a768d37876abb2e6c49fe',
        'redirect' => 'http://project-baonq.herokuapp.com/auth/facebook/callback',
    ],



];
