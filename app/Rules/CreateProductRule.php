<?php

namespace App\Rules;

use App\Models\Product;
use Illuminate\Contracts\Validation\InvokableRule;

class CreateProductRule implements InvokableRule
{
    public $item;

    public function __construct($item)
    {
        $this->item = $item;
    }
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {
        $query = Product::where('item_id',$this->item->id)->whereJsonContains('options',$value)->count();

        if ($query > 0) {
            
            $fail('Duplicate options');

        }
    }

}
