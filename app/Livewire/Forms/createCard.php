<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class createCard extends Form
{
    #[Validate('required')]
    public string $title = '';

    
}
