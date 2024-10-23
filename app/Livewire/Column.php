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

    public $listeners = [
        'column-{column.id}-updated' => '$refresh'
    ];

    public function mount() 
    {
        $this->editColumnForm->title = $this->column->title;
    }

    public function archivedColumn() 
    {
        $this->authorize('archive', $this->column);

       $this->column->update([
            'archived_at' => now()
       ]);

       $this->dispatch('board-updated');
    }

    public function updateColumn()
    {
        $this->authorize('update', $this->column);

        $this->editColumnForm->validate();

        $this->column->update($this->editColumnForm->only('title'));

        $this->dispatch('column-updated');
    }

    public function createCard()
    {
        $this->authorize('createCard', $this->column);
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
            'cards' => $this->column->cards()->ordered()->notArchive()->get(),
        ]);
    }
}
