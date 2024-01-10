<?php

namespace App\Http\Livewire\Menu;

use App\Traits\MenuTrait;
use Livewire\Component;

class Logistic extends Component
{
    use MenuTrait;

    public $items;

    public function mount()
    {
        $this->items = $this->logistic();
    }
    public function render()
    {
        return view('livewire.menu.logistic');
    }
}
