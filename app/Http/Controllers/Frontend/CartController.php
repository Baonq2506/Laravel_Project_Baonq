<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        $products = Cart::content();

        return view('frontend.shops.cart', [
            'products' => $products,
        ]);
    }

    public function add($id)
    {
        $product = Product::find($id);

        Cart::add($product->id, $product->name, 1, $product->sale_price, 0,[
            'image'=>json_decode($product->info)[0]->path,
        ]);
        return redirect()->route('frontend.cart.index');
    }

    public function remove($rowId){
        Cart::remove($rowId);
        return redirect()->route('frontend.cart.index');
    }

    public function increase($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty );
        return redirect()->route('frontend.cart.index');
    }

    public function decrease($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty );
        return redirect()->route('frontend.cart.index');
    }

}
