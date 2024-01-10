<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class ListCategories extends Component
{

    protected $listeners = ['categoryCreated' => 'render'];
    public function render()
    {
        return view('livewire.category.list-categories',[
            'categories' => Category::all()
        ]);
    }
}
