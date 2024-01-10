<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Auth;

class CartService 
{
    public $id;
    public $name;
    public $quantity;
    public $price;
    public $weight;
    public $options = [];
    public $user;

    public function __construct()
    {
        // $this->user = $this->getUser();
    }
    public function add()
    {
       return '2';
    }

}