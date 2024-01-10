<?php

namespace App\Http\Controllers\Shop\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('shop.account.profile');
    }
}
