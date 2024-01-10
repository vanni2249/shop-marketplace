<?php

namespace App\Http\Controllers\Shop\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index()
    {
        return view('shop.account.payment-methods');
    }
}
