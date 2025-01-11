<?php

use App\Models\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $timeline = [
        [
            'title' => 'Ceremony Guest Arrival',
            'datetime' => 'Saturday, 28th June 2025, at 14:30',
            'description' => "Our ceremony is exclusive to close family and friends, because we'll struggle with it in front of them, let alone 90 odd faces 🙈",
        ],
        [
            'title' => 'Ceremony',
            'datetime' => 'Saturday, 28th June 2025, at 15:00',
            'description' => 'Let us tie the knot.',
        ],
        [
            'title' => 'Drinks Reception',
            'datetime' => 'Saturday, 28th June 2025, at 15:40',
            'description' => 'Raise a glass to the Husband and Wife',
        ],
        [
            'title' => 'Buffet',
            'datetime' => 'Saturday, 28th June 2025, at 16:20',
            'description' => 'Snacks for all.',
        ],
        [
            'title' => 'Evening Guest Arrival',
            'datetime' => 'Saturday, 28th June 2025, at 17:45',
            'description' => 'The bar opens, and the unwashed masses arrive! We welcome dear friends (and the others) to celebrate with us. BBQ, Cocktails, DJ, and Redwell Beer 🍻!',
        ],
        [
            'title' => 'BBQ',
            'datetime' => 'Saturday, 28th June 2025, at 19:00',
            'description' => 'Beef Burgers, Sausages, and grass-fed burgers for the Vegies',
        ],
        [
            'title' => 'Cake!!!',
            'datetime' => 'Saturday, 28th June 2025, at 19:45',
            'description' => "The part, if Mez is honest, she's most excited for... Let's cut the cake!",
        ],
        [
            'title' => 'DJ',
            'datetime' => 'Saturday, 28th June 2025, at 20:00',
            'description' => "Let's enjoy some tunes, and apparently people do dances? 🤨",
        ],
        [
            'title' => 'Carriages',
            'datetime' => 'Saturday, 28th June 2025, at 23:00',
            'description' => "Those camping will gather around the log fires, cuppa of hot cocoa (or maybe a cheeky espresso martini). Those not whisked away like Cinderella (just don't forget your shoes)",
        ],
    ];

    return view('home', compact('timeline'));
});

Route::get('/rsvp/{response}', function (Response $response) {
    return view('rsvp', ['rsvp' => $response]);
})->name('rsvp');
