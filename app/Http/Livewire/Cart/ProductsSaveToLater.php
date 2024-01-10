<?php

namespace App\Http\Livewire\Cart;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductsSaveToLater extends Component
{
    public $user;
    public $cart;

    protected $listeners = ['updatedCart' => 'mount'];

    public function mount()
    {
        $this->user = Auth::user();
        $this->cart = $this->user->carts->where('name','saveforlater')->first();
    }

    public function render()
    {
        return view('livewire.cart.products-save-to-later');
    }
}
