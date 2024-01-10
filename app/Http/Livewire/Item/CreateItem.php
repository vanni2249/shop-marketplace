<?php

namespace App\Http\Livewire\Item;

use App\Models\Item;
use Livewire\Component;

class CreateItem extends Component
{
    public $modal;
    public $title;

    protected $rules = [
        'title' => 'required|min:16|max:180'
    ];

    public function render()
    {
        return view('livewire.item.create-item');
    }

    public function store()
    {
        $this->validate();

        Item::create([
                'title' => $this->title,
        ]);

        $this->modal = false;

        $this->reset('title');

        $this->emit('categoryCreated');
    }
}
