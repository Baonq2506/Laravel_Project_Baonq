<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getStatus($id,$status_id){
        $order = Order::find($id);
        $order->status=$status_id;
        $order->save();
        return redirect()->route('backend.product.order');
    }
}