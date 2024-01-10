<?php

namespace App\Http\Controllers\Shop;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompletedController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Order $order)
    {
        
        return  view('shop.completed',compact('order'));
    }
}
