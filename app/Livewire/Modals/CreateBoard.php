<?php

namespace App\Livewire\Modals;

use App\Livewire\Forms\CreateBoard as FormsCreateBoard;
use Auth;
use LivewireUI\Modal\ModalComponent;

class CreateBoard extends ModalComponent
{
    public FormsCreateBoard $createBoardForm;

    public function createBoard()
    {
        $this->createBoardForm->validate();

        $board = Auth::user()->boards()->create($this->createBoardForm->only('title'));

        return redirect()->route('boards.show', $board);

    }

    public function render()
    {
        return view('livewire.modals.create-board');
    }
}
