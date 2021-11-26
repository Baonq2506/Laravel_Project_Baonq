<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Conner\Likeable\Likeable;

class Comment extends Model
{
    use HasFactory;
    use Likeable;

    public function products(){
        return $this->belongsTo(Product::class,'product_id');
    }

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
}