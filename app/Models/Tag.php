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
    protected $tagColor=[
        1=>'success',
        2=>'danger',
        3=>'info',
        4=>'dark',
        5=>'primary',
        6=>'secondary',
        7=>'warning',
    ];

    public function getTagTextAttribute()
    {
        if($this->id > 7){
            return '<span class="badge badge-dark",style="color:black">' . $this->name . '<span>';
        }
        return '<span class="badge badge-' .$this->tagColor[$this->id] .'">' . $this->name . '<span>';
    }
    public function post(){
        return $this->belongsToMany(Post::class,'post_tags','post_id','tag_id');
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = Str::slug($name);
    }
}
