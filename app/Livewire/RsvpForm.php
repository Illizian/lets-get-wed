<?php

namespace App\Livewire;

use App\Livewire\Forms\RsvpResponse;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class RsvpForm extends Component
{
    public RsvpResponse $form;

    public function submit(): void
    {
        $this->form->store();
    }

    public function render(): View
    {
        return view('livewire.rsvp-form');
    }
}
