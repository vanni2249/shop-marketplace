<?php

namespace App\Http\Controllers\Logistic\Items;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Section;
use Illuminate\Http\Request;

class ItemSectionController extends Controller
{

    public function index(Item $item)
    {
        return view('logistic.items.sections.index',compact('item'));
    }

}
