<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/events/callback', function (Request $request) {
        $controller = config('event-proxy-helper.controller');
        $method = config('event-proxy-helper.callback.method');

        if (!class_exists($controller)) {
            return response()->json(['error' => 'No callback controller configured'], 500);
        }
        if (!method_exists($controller, $method)) {
            return response()->json(['error' => 'No callback method configured'], 500);
        }
        else {
            return (new $controller)->$method($request);
        }
    });

    Route::post('/events/{topic}', function (Request $request, $topic) {
        $controller = config('event-proxy-helper.controller');
        $method = config('event-proxy-helper.sendEvents.method');

        if (!class_exists($controller)) {
            return response()->json(['error' => 'No sendEvents controller configured'], 500);
        }
        if (!method_exists($controller, $method)) {
            return response()->json(['error' => 'No sendEvents method configured'], 500);
        }
        else {
            return (new $controller)->$method($request, $topic);
        }
    });
});

Route::get('/events/test', function () {
    return response('This is a test', 200);
});