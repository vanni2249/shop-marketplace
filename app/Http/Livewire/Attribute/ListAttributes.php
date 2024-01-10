<?php

namespace App\Http\Livewire\Attribute;

use App\Models\Attribute;
use Livewire\Component;

class ListAttributes extends Component
{
    public $modal = false;
    public $attribute_id;
    public $attribute_name;

    protected $listeners = [
        'attributeCreated' => 'render',
        'destroy_attribute' => 'render'
    ];

    public function render()
    {
        return view('livewire.attribute.list-attributes',[
            'attributes' => Attribute::all()
        ]);
    }

    public function warning_destroy($id)
    {
        $this->modal = true;
        $this->attribute_id = $id;
        $this->attribute_name = Attribute::find($id)->name;
    }

    public function cancel_destroy()
    {
        $this->modal = false;
    }

    public function destroy($id)
    {
        Attribute::destroy($id);

        $this->emit('attributeDeleted');

        $this->modal = false;
    }
}
