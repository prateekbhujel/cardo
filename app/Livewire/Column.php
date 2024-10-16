<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Column as ColumnModel;

class Column extends Component
{
    public ColumnModel $column;

    public function render()
    {
        return view('livewire.column'  );
    }
}
