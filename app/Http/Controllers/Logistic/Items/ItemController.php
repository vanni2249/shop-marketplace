<?php

namespace App\Http\Controllers\Logistic\Items;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{

    public function index()
    {
        return view('logistic.items.index');
    }


    public function show($item)
    {
        $item = Item::with(['images','products'])->find($item);
        return view('logistic.items.show',compact('item'));
    }

}
