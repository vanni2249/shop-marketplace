<?php

namespace App\Http\Livewire\Section;

use App\Models\Section;
use Livewire\Component;

class ListSection extends Component
{

    public $section;
    public $name;
    public $updateModal;
    public $removeModal;

    protected $listeners = ['sectionCreated' => 'render'];

    protected $rules = [
        'name' => 'required|min:6|unique:sections,name'
    ];

    public function render()
    {
        return view('livewire.section.list-section',[
            'items' => Section::all()
        ]);
    }

    public function edit(Section $section)
    {
        $this->section = $section;
        $this->name = $section->name;
        $this->updateModal = true;
    }

    public function update()
    {
        $this->validate();
        $this->section->name = $this->name;
        $this->section->save();
        $this->updateModal = false;
    }

    public function delete(Section $section)
    {
        $this->section = $section;
        $this->name = $section->name;
        $this->removeModal = true;
    }

    public function remove($section)
    {
        Section::destroy($section);
        $this->removeModal = false;
        $this->emit('sectionRemoved');
    }
}
