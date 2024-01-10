<?php

namespace App\Http\Controllers\Logistic\Items;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Product;
use Illuminate\Http\Request;

class ItemProductController extends Controller
{

    public function index(Item $item)
    {
        return view('logistic.items.products.index',compact('item'));
    }

    public function show(Item $item, Product $product)
    {
        return view('logistic.items.products.show',compact(['item','product']));
    }

}
