<?php

use App\Models\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $timeline = config('timeline');

    return view('ceremony', compact('timeline'));
});

Route::get('/reception', function () {
    $timeline = array_slice(config('timeline'), 4);

    return view('reception', compact('timeline'));
});

Route::get('/rsvp/{response}', function (Response $response) {
    return view('rsvp', ['rsvp' => $response]);
})->name('rsvp');
