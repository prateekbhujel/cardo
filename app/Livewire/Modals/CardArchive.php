<?php

namespace App\Livewire\Modals;

use App\Models\Board;
use LivewireUI\Modal\ModalComponent;

class CardArchive extends ModalComponent
{
    public Board $board;

    public function render()
    {
        return view('livewire.modals.card-archive', [
            // @todo order by when Archived.
            'cards' => $this->board->cards()->archived()->get()
        ]);
    }
}
