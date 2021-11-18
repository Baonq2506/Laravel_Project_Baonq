<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Product extends Model
{
    use HasFactory;

    protected $statusArr = [
        1 => 'Stocking',
        2 => 'Sold out',
        3 => 'Out of stock',
        4 => 'Put in stock',
        5 => 'Put it on the shelf',
    ];
    protected $statusColor = [
        1 => 'success',
        2 => 'danger',
        3 => 'info',
        4=>'warning',
    ];

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = Str::slug($name);
    }

    public function getStatus()
    {
        return $this->statusArr;
    }
    public function getStatusTextAttribute()
    {
        return '<span class="badge badge-' . $this->statusColor[$this->status] . '">' . $this->statusArr[$this->status] . '<span>';
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product', 'order_id', 'product_id');
    }

    public function prodCategories()
    {
        return $this->belongsTo(ProdCategory::class, 'category_id');
    }

    public function brands()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function userCreated()
    {
        return $this->belongsTo(User::class, 'user_created_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'product_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'product_id');
    }

}
