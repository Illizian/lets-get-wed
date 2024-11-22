<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class RsvpResponse extends Form
{
    #[Validate('required|min:3')]
    public string $name;

    #[Validate('required|email')]
    public string $email;

    #[Validate('sometimes|number|max:2')]
    public array $guests_adult;

    #[Validate('sometimes|number|max:2')]
    public array $guests_children;

    public string $dietaries;

    #[Validate('required')]
    public string $camping = 'no';

    public function store(): void
    {
        $this->validate();

        dump($this->all());
    }
}
