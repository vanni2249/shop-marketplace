<?php

namespace App\Http\Livewire\Cart;

use App\Models\Product;
use Livewire\Component;
use App\Http\Services\CartService;
use Illuminate\Support\Facades\Auth;

class AddProductCart extends Component
{
    public $user;
    public $item;
    public $products;
    public $product;
    public $options = [];
    public $quantity;


    public $cart;
    public $quantity_product_in_cart ;

    public $button;
    public $message;

    public $test;
    

    public function mount()
    {

        
        $this->user = Auth::user();

        $this->products = $this->item->products->sortByDesc(function($query){
            
            return $query->avalible();
            
        });
        
        $this->product = $this->products->first();

        if ($this->item->attributes()->count()) {

            $this->options = $this->product->options();

        }

        $this->quantity = 1;
        
        
        if ($this->user) {
            
            $this->cart = $this->user->cart();
            // $this->cart = $this->get_cart();
            
            $this->quantity_product_in_cart = $this->get_quantity_product_in_cart() ?? false;
            
            $this->button = $this->get_button_status();
            
            $this->message = $this->get_message();
            
        }
        

    }

    public function render()
    {
        return view('livewire.cart.add-product-cart');
    }

    public function updated()
    {
        $this->quantity = 1;

        if($this->options){
            
            $this->product = Product::with(['carts'])->where('item_id',$this->item->id)->whereJsonContains('options',$this->options)->first();

        }

        $this->quantity_product_in_cart = $this->get_quantity_product_in_cart();

        $this->button = $this->get_button_status();

        $this->message = $this->get_message();
    }

    public function add_quantity()
    {
        if ($this->quantity < ($this->product->avalible() - $this->quantity_product_in_cart)) {
            return $this->quantity++;
        }
    }

    public function less_quantity()
    {
        if ($this->quantity > 1) {
            return $this->quantity--;
        }
    }

    public function add_product_cart()
    {   
        if($this->cart){

            $this->create_product_to_cart();

        }else{

            $this->create_cart();

        }
           
    }

    // public function get_cart()
    // {
    //     $cart = Cart::where('name','shopping')
    //                 ->where('user_id',Auth::user()->id)
    //                 ->doesntHave('order')
    //                 ->first();

    //     if($cart){

    //         return $cart;

    //     }else{

    //         return false;

    //     }
        
    // }

    public function create_cart()
    {
        $this->cart = $this->user->carts()->create([
            'name' => 'shopping'
        ]);
        
        $this->add_product_cart();
    }
    
    public function create_product_to_cart()
    {

        if ($this->cart->products()->find($this->product->id)) {

            $this->cart->products()->updateExistingPivot($this->product->id,[
                'quantity' => $this->quantity_product_in_cart + $this->quantity
            ]);
            
        }else{

            $this->cart->products()
                       ->attach($this->product->id,['quantity' => $this->quantity_product_in_cart + $this->quantity]);

        }
        
        $this->emit('updatedCart');

        $this->updated();

    }

    public function get_quantity_product_in_cart()
    {
        if ($this->product->avalible() > 0 && $this->cart) {

            if ($this->cart->products()->find($this->product->id)) {
                return $this->cart->products()->find($this->product->id)->pivot->quantity;
            }else{
                return 0;
            }


        }else{
            return 0;
            
        }
    }

    public function get_button_status()
    {
        if ($this->product->avalible() > 0) {
            
            if ($this->quantity_product_in_cart >= $this->product->avalible() ) {
                return false;

            }else{
                return true;
            }

        } else {
            
            return false;

        }
        
    }

    public function get_message()
    {
        if ($this->product->avalible() > 0) {
            
            if ($this->quantity_product_in_cart >= $this->product->avalible() ) {

                return 'you have selected the quantity available...';

            }else{
                return true;
            }

        } else {
            

            return 'you have selected the quantity available...';

        }
    }

}
