<?php

namespace App\Http\Livewire\Section;

use App\Models\Section;
use Livewire\Component;

class CreateSection extends Component
{
    public $modal;
    public $name;
    // public $section;

    protected $rules = [
        'name' => 'required|min:6|unique:sections,name'
    ];

    public function render()
    {
        return view('livewire.section.create-section');
    }

    public function store()
    {
        $this->validate();

        Section::create([
            'name' => $this->name,
        ]);

        $this->modal = false;

        $this->reset('name');

        $this->emit('sectionCreated');
;    }
}
