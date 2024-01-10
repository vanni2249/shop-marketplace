<?php

namespace App\Http\Controllers\Shop;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Services\CartService;
use App\Http\Controllers\Controller;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $items = Item::query()
                    ->whereNotNull('posted_at')
                    ->whereDate('posted_at','<=',now())
                    ->has('products.purchases')
                    ->paginate(40);

        return view('shop.items.index',compact('items'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($item, CartService $cartService)
    {
        $item = Item::query()
                    ->with([
                        'images',
                        'products'
                    ])
                    ->whereNotNull('posted_at')
                    ->whereDate('posted_at','<=',now())
                    ->has('products.purchases')
                    ->findOrFail($item);

        return view('shop.items.show',compact('item','cartService'));
            
    }

}
