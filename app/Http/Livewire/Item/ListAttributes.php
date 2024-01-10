<?php

namespace App\Http\Livewire\Item;

use Livewire\Component;
use App\Models\Attribute;

class ListAttributes extends Component
{
    public $item;

    protected $listeners = ['syncAttributeItem' => 'render','createdAttributeValue' => 'render'];

    public function render()
    {
        return view('livewire.item.list-attributes');
    }

    public function remove($attribute)
    {
        Attribute::destroy($attribute);
    }
}
