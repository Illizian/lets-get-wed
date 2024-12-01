<?php

namespace App\Livewire\Forms;

use App\Jobs\ProcessRsvpResponse;
use App\Models\Response;
use Livewire\Attributes\Validate;
use Livewire\Form;

class RsvpResponse extends Form
{
    #[Validate('required|min:3')]
    public string $name = '';

    #[Validate('required|email')]
    public string $email = '';

    #[Validate('sometimes|array')]
    public array $guests = [];

    #[Validate('sometimes')]
    public string $dietaries = '';

    #[Validate('required')]
    public string $camping = 'no';

    public function set(Response $rsvp): void
    {
        $this->name = $rsvp->name;
        $this->email = $rsvp->email;
        $this->dietaries = $rsvp->dietaries ?? '';
        $this->guests = $rsvp->guests;
    }

    public function store(): void
    {
        $attributes = $this->validate();

        ProcessRsvpResponse::dispatch($attributes);
    }

    public function update(Response $rsvp): void
    {
        $attributes = $this->validate();

        $rsvp->update($attributes);
    }
}
