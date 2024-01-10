<?php

namespace App\Http\Livewire\Item;

use App\Models\Section;
use Livewire\Component;

class SyncSections extends Component
{
    public $item;
    public $data = [];
    public $test;

    public function mount()
    {
        foreach($this->item->sections as $section){

            array_push($this->data, $section->id);

        }
    }

    public function render()
    {
        return view('livewire.item.sync-sections',[
            'sections' => Section::all()
        ]);
    }

    public function updated()
    {
        $this->test = $this->item->sections()->sync($this->data);
    }


}
