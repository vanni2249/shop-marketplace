<?php

namespace App\Http\Controllers\Shop;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $cart = Cart::where('name','shopping')
                    ->where('user_id',Auth::user()->id)
                    ->doesntHave('order')
                    ->first();
                    
        return view('shop.checkout',compact('cart'));
    }
}
