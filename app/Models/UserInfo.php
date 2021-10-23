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
        'city',
        'country',
        'created_at',
        'updated_at',
    ];

    protected $genderArr=[
        1=>'Male',
        2=>'Female',
        3=>'Other',
    ];
    // public function  setGenderAttribute($gender){
    //    $this->attributes['gender'] = $this->genderArr[$gender];
    // }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}