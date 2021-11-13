<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';
    public function products(){
        return $this->belongsTo(Product::class,'product_id');
    }

    public function getImageUrlFullAttribute(){
        if (!empty($this->path)) {
            if (Storage::disk('products')->exists($this->path)) {
                return Storage::disk('products')->url($this->path);
            } else {
                return Storage::disk('products')->url('product_default.jpg');
            }
        } else {
            return Storage::disk('products')->url('product_default.jpg');
        }
    }
}