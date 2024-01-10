<?php

namespace App\Http\Livewire\Item;

use Livewire\Component;

class ListProducts extends Component
{
    public $item;
    
    public function render()
    {
        return view('livewire.item.list-products');
    }
}
