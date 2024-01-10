<?php

namespace App\Http\Livewire\Cart;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProductsCart extends Component
{
    public $user;
    public $cart;
    public $test;

    // protected $listeners = ['productRemovedCart' => 'render','productAddedCart' => 'render', 'productUpdatedCart' => 'render'];
    protected $listeners = [
        'updatedCart' => 'render'
    ];

    public function mount()
    {
        $this->user = Auth::user();

        // $this->cart = $this->get_cart();
        
    }

    public function render()
    {
        return view('livewire.cart.products-cart',[
            'cart' => $this->cart
        ]);
    }

    // public function get_cart()
    // {
    //     $cart = Cart::with(['products'])
    //                 ->where('user_id', Auth::user()->id)
    //                 ->where('name','shopping')
    //                 ->doesntHave('order')
    //                 ->first();

    //     if($cart){

    //         return $cart;

    //     }else{

    //         return false;

    //     }
        
    // }


    public function less_quantity($product)
    {
        if ( $this->cart->products()->find($product)->pivot->quantity > 1) {
            $this->cart->products()->updateExistingPivot($product,[
                'quantity' => $this->cart->products()->find($product)->pivot->quantity - 1
            ]);
        }else{

        }

        $this->emit('updatedCart');

    }

    public function add_quantity($product)
    {
        if ($this->cart->products()->find($product)->avalible() > $this->cart->products()->find($product)->pivot->quantity) {

            $this->cart->products()->updateExistingPivot($product,[
                'quantity' => $this->cart->products()->find($product)->pivot->quantity + 1
            ]);

        }else{

        }

        $this->emit('updatedCart');

    }

    // public function get_count()
    // {
    //     if ($this->cart) {
    //         return $this->cart->products()->sum('pivot.quantity');
    //     }else{
    //         return false;
    //     }
    // }
}
