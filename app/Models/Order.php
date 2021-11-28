<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $statusArr=[
        1=>'Wait for confirmation',
        2=>'Shipped',
        3=>'Cancel order',
        4=>'Delivered',
        5=>'Confirmed',
    ];
    protected $statusColor=[
        1=>'warning',
        2=>'info',
        3=>'danger',
        4=>'success',
        5=>'primary'
    ];
    protected $paymentArr=[
        1=>'Pay on delivery',
        2=>'Payment via bank card'
    ];
    protected $paymentColor=[
        1=>'success',
        2=>'info'
    ];
    public function statusAll(){
        return $this->statusArr;
    }
    public function getStatusTextAttribute(){
        return '<span class="badge badge-' . $this->statusColor[$this->status] . '">' . $this->statusArr[$this->status] . '</span>';
    }

    public function getDateFormatAttribute(){
        $date=Carbon::create($this->created_at);
        return $date->toDayDateTimeString();
    }

    public function getPaymentTextAttribute(){
        return '<span class="badge badge-' . $this->paymentColor[$this->payment_method] . '">' . $this->paymentArr[$this->payment_method] . '<span>';
    }
    public function products(){

        return $this->belongsToMany(Product::class,'order_product','order_id','product_id');
    }


}