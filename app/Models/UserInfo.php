<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;
    protected $table = 'user_infos';
    protected $fillable = [
        'user_id',
        'address',
        'phone',
        'gender',
        'date',
        'description',
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}