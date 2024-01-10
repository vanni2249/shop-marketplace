<?php

namespace App\Http\Livewire\Cart;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CounterProductsCart extends Component
{
    public $user;
    public $cart;
    public $count;

    protected $listeners = [
        'updatedCart' => 'mount'
    ];

    public function mount()
    {

        $this->user = Auth::user();

        // $this->cart = $this->get_cart();
        $this->cart = $this->user->carts()->where('name','shopping')->first();

        $this->count = $this->get_count();
        // $this->count = 0;
        
    }

    public function render()
    {
        return view('livewire.cart.counter-products-cart');
    }

    public function get_count()
    {
        if ($this->cart) {
            // return  $this->user->cart_products_count();;
            return  $this->cart->products->sum('pivot.quantity');
        }else{
            return false;
        }
    }
    
}
