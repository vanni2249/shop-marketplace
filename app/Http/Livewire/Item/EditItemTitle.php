<?php

namespace App\Http\Livewire\Item;

use Livewire\Component;

class EditItemTitle extends Component
{
    public $item;
    public $title;
    public $button = false;

    public function mount()
    {
        $this->title = $this->item->title;
    }

    public function render()
    {
        return view('livewire.item.edit-item-title');
    }

    public function updated()
    {
        $this->button = true;
    }

    public function update()
    {
        $this->item->update([
            'title' => $this->title
        ]);

        $this->button = false;
    }
}
