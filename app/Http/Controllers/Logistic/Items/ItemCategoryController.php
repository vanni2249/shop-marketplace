<?php

namespace App\Http\Controllers\Logistic\Items;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function index(Item $item)
    {
        return view('logistic.items.categories.index',compact('item'));
    }

    
}
