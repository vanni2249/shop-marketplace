<?php

namespace App\Http\Controllers\Logistic;

use App\Http\Controllers\Controller;
use App\Traits\MenuTrait;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    use MenuTrait;

    public $items = [];

    public function __construct()
    {
        $this->items = [
            [
                'name' => 'sections',
                'url' => 'logistic.sections.index',
            ],
            [
                'name' => 'categories',
                'url' => 'logistic.categories.index',
            ],
            [
                'name' => 'attributes',
                'url' => 'logistic.attributes.index',
            ],
            [
                'name' => 'items',
                'url' => 'logistic.items.index',
                'numbers' => '23'
            ],
            [
                'name' => 'orders',
                'url' => 'logistic.items.index'
            ],
            [
                'name' => 'transactions',
                'url' => 'logistic.items.index'
            ],
            [
                'name' => 'shipped',
                'url' => 'logistic.items.index'
            ],
            [
                'name' => 'works',
                'url' => 'logistic.items.index'
            ],
            [
                'name' => 'retruns',
                'url' => 'logistic.items.index',
                'svg' => ''
            ],
            [
                'name' => 'customers',
                'url' => 'logistic.items.index'
            ],
            [
                'name' => 'sellers',
                'url' => 'logistic.items.index'
            ],
            [
                'name' => 'merchants',
                'url' => 'logistic.items.index'
            ],
            [
                'name' => 'reviews',
                'url' => 'logistic.items.index'
            ],
        ];
    }

    public function index()
    {
        return view('logistic.index',[
            'items' => $this->logistic()
        ]);
    }
}
