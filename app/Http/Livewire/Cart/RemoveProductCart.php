<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

class RemoveProductCart extends Component
{
    public $cart;
    public $product;

    public function render()
    {
        return view('livewire.cart.remove-product-cart');
    }

    public function remove()
    {
        $this->cart->products()->detach($this->product);

        $this->emit('productRemovedCart');
    }
}
