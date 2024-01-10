<?php

namespace App\Http\Livewire\Cart;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class SubTotalCart extends Component
{
    public $cart;
    public $total = [];
    public $product_count;

    // protected $listeners = [
    //             'productRemovedCart' => 'mount',
    //             'productAddedCart' => 'mount', 
    //             'productUpdatedCart' => 'mount'
    //         ];

    protected $listeners = [
        'updatedCart' => 'mount'
    ];

    public function mount()
    {
        
        if (!$this->cart) {

            $this->cart = false;
            
        }else{

            $this->get_total();
            
        }

    }

    public function render()
    {
        return view('livewire.cart.sub-total-cart');
    }

    public function get_total()
    {
        $this->total = [];
            
        foreach($this->cart->products()->get() as $product){

            array_push($this->total,$product->price * $product->pivot->quantity);

        }

        $this->total = array_sum($this->total);
    }

}
