<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        return view('frontend.shops.index');
    }

    public function detailProduct(){
        return view('frontend.shops.singerProduct');
    }

    public function cart(){
        return view('frontend.shops.cart');
    }
    public function checkoutCart(){
        return view('frontend.shops.checkout');
    }
}