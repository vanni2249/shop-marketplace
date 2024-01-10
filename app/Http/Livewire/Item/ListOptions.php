<?php

namespace App\Http\Livewire\Item;

use App\Models\Option;
use Livewire\Component;

class ListOptions extends Component
{
    public $item;
    public $attribute; 

    protected $listeners = ['createdOption' => 'render'];

    public function render()
    {
        return view('livewire.item.list-options');
    }

    public function remove($option)
    {
        Option::destroy($option);
    }
}
