<?php

namespace App\Http\Controllers\Logistic\Items;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemAttributeController extends Controller
{

    public function index(Item $item)
    {
        return view('logistic.items.attributes.index',compact('item'));
    }



}
