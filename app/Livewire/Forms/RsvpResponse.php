<?php

namespace App\Livewire\Forms;

use App\Enums\CeremonyStatus;
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

    #[Validate('required')]
    public string $ceremony = CeremonyStatus::NONE->value;

    public function set(Response $rsvp): void
    {
        $this->name = $rsvp->name;
        $this->email = $rsvp->email;
        $this->guests = $rsvp->guests;
        $this->dietaries = $rsvp->dietaries ?? '';
        $this->camping = $rsvp->camping;
        $this->ceremony = $rsvp->ceremony->value;
    }

    public function store(): void
    {
        $attributes = $this->validate();

        ProcessRsvpResponse::dispatch($attributes, null);
    }

    public function update(Response $rsvp): void
    {
        $attributes = $this->validate();

        ProcessRsvpResponse::dispatch($attributes, $rsvp);
    }
}
