<?php

namespace App\Http\Livewire\Order;

use App\Models\Cart;
use Livewire\Component;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class CreateOrder extends Component
{
    public $user;
    public $transaction;
    public $order;
    public $cart;

    public function mount()
    {
        $this->user = Auth::user();
        $this->cart = Cart::where('name','shopping')
                    ->where('user_id',Auth::user()->id)
                    ->doesntHave('order')
                    ->first();
    }

    public function render()
    {
        return view('livewire.order.create-order');
    }

    public function store()
    {
        $this->transaction = $this->user->transactions()->create([
            'status' => 'success',
            'data' => 'data'
        ]);

        $this->order = $this->user->orders()->create([
            'transaction_id' => $this->transaction->id,
            'cart_id' => $this->cart->id
        ]);

        foreach($this->cart->products as $product){
            $this->order->sales()->create([
                'product_id' => $product->id,
                'quantity' => $product->pivot->quantity,
                'price' => $product->price
            ]);
        }

        return redirect()->to('/completed/orders/'.$this->order->id);
    }
}
