<?php

use App\Models\Response;
use Illuminate\Http\Request;
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

Route::get('/responses', function (Request $request) {
    abort_if(boolean: config('wedding.key') === null, code: 500);
    abort_if(boolean: $request->query('key') !== config('wedding.key'), code: 403);

    return view('responses', [
        'responses' => Response::all(),
    ]);
});
