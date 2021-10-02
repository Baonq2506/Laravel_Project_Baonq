<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        return view('frontend.shops.index');
    }

    public function singerProduct($product_id){
        return view('frontend.shops.singerProduct');
    }

    public function cart($product_id){
        return view('frontend.shops.cart');
    }
}