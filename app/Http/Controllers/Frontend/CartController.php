<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePlaceOrderRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\UserInfo;
use App\Notifications\NotificationProduct;
use App\Notifications\NotificationUser;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

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
        if(auth()->check()){
            $product = Product::find($id);
            Cart::add($product->id, $product->name, 1, $product->sale_price, 0, [
                'image' => $product->product_image_full,
            ]);
            return redirect()->route('frontend.cart.index');
        }
        toastr()->warning('You need login ');
        return redirect()->back();

    }

    public function remove($rowId)
    {
        Cart::remove($rowId);
        return redirect()->route('frontend.cart.index');
    }

    public function removeAll()
    {
        Cart::destroy();
        toastr()->success('Delete order was successfully');
        return redirect()->route('frontend.cart.index');
    }

    public function increase($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
        return redirect()->route('frontend.cart.index');
    }

    public function decrease($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
        return redirect()->route('frontend.cart.index');
    }
    public function checkout($id)
    {
        if(auth()->check()){

            $products = Cart::content();
            if(Cart::count()== null){
                toastr()->warning('You have no products in your shopping cart');
                return redirect()->back();
            }
            $userOrder = Order::where('user_id', $id)->where('status', 1)->get();
            return view('frontend.shops.checkout', [
                'products' => $products,
            ]);
        }
        else{
            toastr()->warning('You need Login to checkout');
            return redirect()->back();
        }

    }
    public function placeOrder(CreatePlaceOrderRequest $request,$id)
    {
        $data = $request->all();
        $carts = Cart::content();
        $order = new Order();
        $order->user_id = $id;
        $order->money_total = Cart::total();
        $order->user_info = json_encode([
            'id'=>auth()->user()->id,
            'name'=>$data['name'],
            'email'=>$data['email'],
            'phone'=>$data['phone'],
            'address'=>$data['address'],
        ]);
        $order->status = 1;
        $order->payment_method = 1;
        $status = $order->save();
        $insertId = $order->id;
        foreach ($carts as $cart) {
            DB::table('order_product')->insert([
                'order_id' => $insertId,
                'product_id' => $cart->id,
                'prod_count' => $cart->qty,
                'discount_value' => '20000',
                'sale_price' => $cart->price,
                'money_total' => $cart->price * $cart->qty - 20000,
            ]);
        }
        $users = User::whereHas('roles', function ($query) {
            $query->where('id', 1);
        })->get();
        $orderId = $insertId;
        $contentNotification= " You have new order";
        foreach ($users as $user) {
            $user->notify(new NotificationProduct(auth()->user(), $orderId,$contentNotification));
        }
        if ($status) {
            Cookie::queue(Cookie::make($id, Cart::content(), 1500));
            Cart::destroy();
            toastr()->success('You place order successfull.Please wait Confirmed, Thank you');
        } else {
            toastr()->success('You place order fail.Please checked order, Thank you');
        }
        return redirect()->route('frontend.shop.index');
    }
    public function orderUser($id){
        $orders = Cookie::get($id);
        dd(Cookie::get('id'),json_decode($orders));
        return view('frontend.shops.order',['orders' => $orders]);
    }
}