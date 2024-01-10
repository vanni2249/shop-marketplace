<?php

namespace App\Http\Livewire\Item;

use Livewire\Component;

class CreateOption extends Component
{
    public $item;
    public $attribute;
    public $value;
    public $open = true;

    protected $rules = [
        'value' => 'required|min:1'
    ];

    public function render()
    {
        return view('livewire.item.create-option');
    }

    public function store()
    {
        $this->validate();
        $this->attribute->options()->create([
            'item_id' => $this->item->id,
            'value' => $this->value
        ]);
        $this->reset('value');
        $this->open = false;
        $this->emit('createdOption');
    }

}
