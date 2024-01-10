<?php

namespace App\Http\Controllers\Shop\Account;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WishlistController extends Controller
{
    public function index()
    {
        return view('shop.account.wishlists',[
            'items' => Item::paginate(11)
        ]);
    }
}
