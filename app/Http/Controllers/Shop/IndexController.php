<?php

namespace App\Http\Controllers\Shop;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $items = Item::with(['images','products'])
                    ->whereNotNull('posted_at')
                    ->whereDate('posted_at','<=',now())
                    ->has('products.purchases')
                    ->inRandomOrder()
                    ->paginate(20);
        return view('shop.index',compact('items'));
    }
}
