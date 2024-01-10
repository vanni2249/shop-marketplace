<?php

namespace App\Http\Controllers\Shop;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $shopping = Cart::with([
                                'products',
                                'products.item',
                                'products.purchases',
                                'products.adjusts',
                                'products.sales'
                                ])
                        ->where('user_id', Auth::user()->id)
                        ->where('name','shopping')
                        ->doesntHave('order')
                        ->first();
        $saveforlater = Cart::with([
                                'products',
                                'products.item',
                                'products.purchases',
                                'products.adjusts',
                                'products.sales'
                                ])
                        ->where('user_id', Auth::user()->id)
                        ->where('name','shopping')
                        ->first();

                    
        return view('shop.cart',compact('shopping','saveforlater'));
    }
}
