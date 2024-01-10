<?php

namespace App\Http\Livewire\Item;

use Livewire\Component;
use App\Rules\CreateProductRule;
use Illuminate\Support\Facades\DB;

class CreateProduct extends Component
{
    public $item;
    public $options = [];
    public $sku;
    public $modal;

    public $attributes_combinations;
    public $product_created;
    public $create_button;

    protected $rules = [
        'sku' => 'required'
    ];

    protected function rules()
    {
        $rules = [
            'sku' => 'required',
            'options' => [new CreateProductRule($this->item, $this->options)]
        ];

        foreach($this->item->attributes as $key => $value){
            $rules['options.'.$value->name] = 'required';
        }   

        return $rules;
    }

    protected function messages()
    {
        $messages = [];

        foreach($this->item->attributes as $key => $value)
        {
            $messages['options.'.$value->name.'.required'] = 'The field '.$value->name.' is required.';
        }

        return $messages;
    }

    public function mount()
    {
        if ($this->item->attributes()->count() == 0) {
            $this->options = null;
        }

        $this->attributes_combinations = $this->get_attributes_combinations();
        $this->product_created = $this->get_product_created();
        $this->create_button = $this->get_create_button();

    }

    public function render()
    {
        return view('livewire.item.create-product');
    }

    public function store()
    {
        $this->validate();
        
        $this->item->products()->create([
            'sku' => $this->sku,
            'options' => $this->options,
        ]);

        $this->modal = false;

        $this->reset(['sku','options']);

    }

    public function get_attributes_combinations()
    {
        $total = [];
        $attributes = DB::table('options')
                                    ->select('attribute_id',DB::raw('count(*) as total'))
                                    ->groupBy('attribute_id')
                                    ->where('item_id',$this->item->id)
                                    ->get()->toArray();
        
        foreach($attributes as $attribute){
            $total [] = $attribute->total;
        }

        return array_product($total);
    }

    public function get_product_created()
    {
        return $this->item->products->count();
    }

    public function get_create_button()
    {
        $total = $this->attributes_combinations - $this->product_created;

        if($total == 0){
            return false;
        }else{
            return true;
        }
    }
}
