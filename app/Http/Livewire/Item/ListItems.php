<?php

namespace App\Http\Livewire\Item;

use App\Models\Item;
use Livewire\Component;
use Livewire\WithPagination;

class ListItems extends Component
{
    use WithPagination;


    public function render()
    {
        return view('livewire.item.list-items',[
            'items' => Item::orderBy('id', 'DESC')->paginate(20)
        ]);
    }
}
