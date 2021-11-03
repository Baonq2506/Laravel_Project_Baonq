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
        7=>"Create Tag",
        8=>"Delete Tag",
        9=>"Edit Tag",
        10=>"Create Employee",
        11=>"Delete Employee",
        12=>"Edit Employee",
        13=>"Create Role",
        14=>"Delete Role",
        15=>"Edit Role",
        16=>"Create Category",
        17=>"Delete Category",
        18=>"Edit Category",
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
