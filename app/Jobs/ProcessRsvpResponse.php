<?php

namespace App\Jobs;

use App\Models\Response;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ProcessRsvpResponse implements ShouldQueue
{
    use Queueable;

    public function __construct(protected array $attributes) {}

    public function handle(): void
    {
        $response = Response::create($this->attributes);
    }
}
