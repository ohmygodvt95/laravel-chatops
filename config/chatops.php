<?php

return [
    'profiles' => [
        'default' => [
            'token' => env('CO_TOKEN'),
        ],
    ],
    'endpoints' => [
        'message' => env('CO_BASE_URL').'/posts'
    ]
];
