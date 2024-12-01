<?php

namespace App\Livewire;

use App\Livewire\Forms\RsvpResponse;
use App\Models\Response;
use Flux\Flux;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class RsvpForm extends Component
{
    public ?Response $rsvp = null;

    public RsvpResponse $form;

    public function submit(): void
    {
        if ($this->rsvp) {
            $this->form->update($this->rsvp);

            Flux::toast(
                variant: 'success',
                duration: 10_000,
                heading: 'RSVP Updated',
                text: 'Thanks for updating your RSVP'
            );
        } else {
            $this->form->store();
            $this->form->reset();

            Flux::toast(
                variant: 'success',
                duration: 10_000,
                heading: 'Thank you! See you soon...',
                text: 'You\'ll receive an email from us shortly to confirm, and with details on how you can update your RSVP!'
            );
        }
    }

    public function mount(): void
    {
        if ($this->rsvp) {
            $this->form->set($this->rsvp);
        }
    }

    public function render(): View
    {
        return view('livewire.rsvp-form');
    }
}
