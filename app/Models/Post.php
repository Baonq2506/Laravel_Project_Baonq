<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory, SoftDeletes;
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
    protected $statusColor = [
        1 => 'success',
        2 => 'danger',
        3 => 'info',
    ];

    public function statusColor($status)
    {
        return $this->statusColor[$status];
    }

    public function statusText($status)
    {
        return $this->statusArr[$status];
    }

    public function statusArr()
    {
        return $this->statusArr;
    }
    public function getImageUrlFullAttribute()
    {
        if (!empty($this->image_url)) {
            if (Storage::disk($this->disk)->exists($this->image_url)) {
                return Storage::disk($this->disk)->url($this->image_url);
            } else {
                return Storage::disk('public')->url('default.jpg');
            }
        } else {
            return Storage::disk('public')->url('default.jpg');
        }

    }

    public function getStatusTextAttribute()
    {
        return '<span class="badge badge-' . $this->statusColor[$this->status] . '">' . $this->statusArr[$this->status] . '<span>';
    }

    public function category()
    {

        return $this->belongsTo(Category::class, 'category_id');
    }

    public function userCreated()
    {
        return $this->belongsTo(User::class, 'user_created_id');
    }

    public function userUpdated()
    {
        return $this->belongsTo(User::class, 'user_updated_id');
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }

    public function boolTagsInput($data)
    {
        $tagData = explode(",", $data[0]);

        $tagAll = Tag::all();
        $tagDatabase = array();
        foreach ($tagAll as $tag) {
            $tagDatabase[$tag->id] = $tag->slug;
        }

        foreach ($tagData as $key => $value) {
            if (in_array(Str::slug($value), $tagDatabase) == false) {
                Tag::create([
                    'name' => $value,
                ]);
            }
        }
        $tagAll = Tag::all();
        $keyArrData = array();
        foreach ($tagData as $key => $value) {
            foreach ($tagAll as $tag) {
                if (Str::slug($value) == $tag->slug) {
                    $keyArrData[$tag->id] = $tag->id;
                }
            }
        }

        return $keyArrData;
    }

}