<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MoveProductFromCartToSaveToLater extends Component
{
    public $product;
    public $cart;
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
    }

    public function render()
    {
        return view('livewire.cart.move-product-from-cart-to-save-to-later');
    }

    public function store()
    {

        if($this->user->carts()->where('name','saveforlater')->first()){

            $this->add_product_to_cart_save_for_later();

        }else{

            $this->create_cart();

        }
    }

    public function create_cart()
    {
        $this->cart = $this->user->carts()->create([
            'name' => 'saveforlater'
        ]);
        
        $this->add_product_to_cart_save_for_later();
    }

    public function add_product_to_cart_save_for_later()
    {
        if ( !$this->user->carts()->where('name','saveforlater')->first()->products()->where('product_id',$this->product->id)->first()) {
                $this->user->carts()->where('name','saveforlater')->first()->products()->attach($this->product->id,['quantity' => 1]);               
        }
        $this->user->carts()->where('name','shopping')->doesntHave('order')->first()->products()->detach($this->product->id);               
       
        $this->emit('productAddedCart');
        $this->emit('updatedCart');

        // $this->updated();
    }
}
