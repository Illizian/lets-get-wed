<?php

namespace App\Jobs;

use App\Livewire\Forms\RsvpResponse;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ProcessRsvpResponse implements ShouldQueue
{
    use Queueable;

    public function __construct(protected RsvpResponse $form) {}

    public function handle(): void
    {
        //
    }
}
