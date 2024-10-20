<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Card as CardModel;

class Card extends Component
{
    public CardModel $card;
    public $listeners = [
        'card-{card.id}-updated' => '$refresh'
    ];
    
    public function render()
    {
        return view('livewire.card');
    }
}
