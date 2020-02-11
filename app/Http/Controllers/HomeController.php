<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\cart;

class HomeController extends Controller
{
    public function index(){
        $products = Product::all();

        $cart = cart::all();
        

        return response()->view('shop.index',[
            'products' => $products,
            'cart' => $cart
        ]);
    }
}