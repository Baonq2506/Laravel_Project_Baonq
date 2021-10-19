<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'created_at',
        'updated_at',
    ];

    public function post(){
        return $this->belongsToMany(Post::class,'post_tags','post_id','tag_id');
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = Str::slug($name);
    }
}