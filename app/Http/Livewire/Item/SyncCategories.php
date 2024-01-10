<?php

namespace App\Http\Livewire\Item;

use Livewire\Component;

class SyncCategories extends Component
{
    public $item;
    public $data = [];

    public function mount()
    {
        foreach($this->item->categories as $category){

            array_push($this->data, $category->id);

        }
    }

    public function render()
    {
        return view('livewire.item.sync-categories',[
            'sections' => $this->item->sections
        ]);
    }

    public function updated()
    {
        $this->item->categories()->sync($this->data);


    }
}
