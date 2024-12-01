<?php

namespace App\Jobs;

use App\Mail\RsvpResponseAlert;
use App\Mail\RsvpResponseConfirmation;
use App\Models\Response;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class ProcessRsvpResponse implements ShouldQueue
{
    use Queueable;

    public function __construct(protected array $attributes) {}

    public function handle(): void
    {
        $response = Response::create($this->attributes);

        Mail::to($response->email)->send(new RsvpResponseConfirmation($response));
        Mail::to('wedding@alexscotton.com')->send(new RsvpResponseAlert($response));
    }
}
