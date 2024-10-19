<?php

namespace App\Livewire;

use App\Livewire\Forms\createCard;
use App\Livewire\Forms\EditColumn;
use Livewire\Component;
use App\Models\Column as ColumnModel;
use Illuminate\Support\Facades\Auth;

class Column extends Component
{
    public ColumnModel $column;

    public EditColumn $editColumnForm;

    public createCard $createCardForm;

    public function mount() 
    {
        $this->editColumnForm->title = $this->column->title;
    }

    public function updateColumn()
    {
        $this->editColumnForm->validate();

        $this->column->update($this->editColumnForm->only('title'));

        $this->dispatch('column-updated');
    }

    public function createCard()
    {
        $this->createCardForm->validate();

        $card = $this->column->cards()->make($this->createCardForm->only('title'));
        $card->user()->associate(Auth::user());

        $card->save();

        $this->createCardForm->reset();

        $this->dispatch('card-created');
    }

    public function render()
    {
        return view('livewire.column',  [
            'cards' => $this->column->cards()->ordered()->get(),
        ]);
    }
}
