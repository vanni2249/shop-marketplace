<?php

namespace App\Http\Controllers\Shop\Account;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(['sales','sales.product','sales.product.item'])
                        ->whereUserId(Auth::user()->id)
                        ->orderBy('created_at','DESC')
                        ->paginate(5);

        return view('shop.account.orders.index',compact('orders'));
    }

    public function show($order)
    {
        $order = Order::with(['sales','sales.product','sales.product.item'])
                        ->find($order);
        return view('shop.account.orders.show',compact('order'));
    }
}
