<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLink extends Model
{
    use HasFactory;
    protected $table = 'user_sn_links';
    protected $fillable = [
        'user_id',
        'fb_url',
        'gg_url',
        'linked_url',
        'switter_url',
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}