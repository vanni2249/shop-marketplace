<?php

namespace App\Http\Livewire\Item;


use Livewire\Component;
use App\Models\Attribute;

class SyncAttributes extends Component
{
    public $item;
    public $data = [];

    public function mount()
    {
        foreach($this->item->attributes as $attribute){

            array_push($this->data, $attribute->id);

        }
    }
    
    public function render()
    {
        return view('livewire.item.sync-attributes',[
            'item' => $this->item,
            'attributes' => Attribute::all()
        ]);
    }

    public function updated()
    {
        $this->item->attributes()->sync($this->data);

        $this->emit('syncAttributeItem');
    }
}
