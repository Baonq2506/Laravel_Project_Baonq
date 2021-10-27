<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Permission extends Model
{
    use HasFactory;

    protected $permissionArr=[
        1=>"Delete Post",
        2=>"Edit Post",
        3=>"Create Post",
        4=>"Delete User",
        5=>"Create User",
        6=>"Edit User",
    ];



    public function permissionsArr(){
        return $this->permissionArr;
    }
    public function roles() {
        return $this->belongsToMany(Role::class,'roles_permissions');

     }

     public function users() {
        return $this->belongsToMany(User::class,'users_permissions');
     }
}