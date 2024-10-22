<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class BoardIndex extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.board-index', [
            'boards' =>Auth::user()->boards
        ]);
    }
}
