<?php

namespace App\Http\Livewire\Attribute;

use App\Models\Attribute;
use Livewire\Component;

class CreateAttribute extends Component
{
    public $name;
    public $modal;

    protected $rules = [
        'name' => 'required|unique:attributes,name'
    ];

    public function render()
    {
        return view('livewire.attribute.create-attributes');
    }

    public function store()
    {
        $this->validate();

        Attribute::create([
            'name' => $this->name
        ]);

        $this->emit('attributeCreated');
        $this->modal = false;
        $this->reset('name');
    }
}
