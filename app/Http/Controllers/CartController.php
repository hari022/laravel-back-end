<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getCart()
    {
        //Get data from cart
        return "data from cart";
    }

    public function addToCart($id)
    {
        return $id;
    }
}
