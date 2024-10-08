<?php

// config for Jmadsm/EventProxyHelper
return [
    'controller' => env('EVENTS_CONTROLLER', 'App\Http\Controllers\EventsController'),
    'callback' => [
        'method' => env('CALLBACK_METHOD', 'handle')
    ],
    'sendEvents' => [
        'method' => env('SENDEVENTS_METHOD', 'send')
    ]
];
