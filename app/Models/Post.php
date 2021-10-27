<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image_url',
        'content',
        'category_id',
        'user_created_id',
        'status',
        'created_at',
        'updated_at',
    ];
    protected $statusArr = [
        1 => 'Public',
        2 => 'Private',
        3 => 'Approval',
    ];
    protected $statusColor=[
        1=>'success',
        2=>'danger',
        3=>'info',
    ];

    protected $tagColor=[
        1=>'success',
        2=>'danger',
        3=>'info',
        4=>'dark',
    ];
    public function statusColor($status){
        return $this->statusColor[$status];
    }

    public function statusText($status){
        return $this->statusArr[$status];
    }
    public function statusArr()
    {
        return $this->statusArr;
    }

    public function getStatusTextAttribute()
    {
        return '<span class="badge badge-' . $this->statusColor[$this->status] .'">' . $this->statusArr[$this->status] . '<span>';
    }
    public function getTagColorAttribute()
    {
        $color=rand(1,4);
        return $this->tagColor[$color];
    }


    public function category(){

        return $this->belongsTo(Category::class,'category_id');
    }

    public function userCreated(){
        return $this->belongsTo(User::class,'user_created_id');
    }
    public function userUpdated(){
        return $this->belongsTo(User::class,'user_updated_id');
    }

    public function tag(){
        return $this->belongsToMany(Tag::class,'post_tags','post_id','tag_id');
    }
}