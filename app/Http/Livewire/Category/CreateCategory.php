<?php

namespace App\Http\Livewire\Category;

use App\Models\Section;
use Livewire\Component;
use App\Models\Category;

class CreateCategory extends Component
{
    public $modal;
    public $name;
    public $section;

    protected $rules = [
        'section' => 'required',
        'name' => 'required|min:6|unique:categories,name'
    ];

    public function render()
    {
        return view('livewire.category.create-category',[
            'sections' => Section::all()
        ]);
    }

    public function store()
    {
        $this->validate();

        $this->section = Section::find($this->section);

        $this->section->categories()->create([
            'name' => $this->name
        ]);   
        //     Category::create([
        //         'name' => $this->name,
        // ]);

        $this->modal = false;

        $this->reset('name');

        $this->emit('categoryCreated');
   }
}
