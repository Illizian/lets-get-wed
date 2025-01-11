<?php

use App\Models\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/rsvp/{response}', function (Response $response) {
    return view('rsvp', ['rsvp' => $response]);
})->name('rsvp');
