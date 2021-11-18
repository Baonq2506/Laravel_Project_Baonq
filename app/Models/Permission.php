<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $permissionArr = [
        "Backend"=> [
            "Category" => [
                "Create Category"=>1,
                "Delete Category"=>2,
                "Edit Category"=>3,
            ],
            "Post" => [
                "Delete Post"=>1,
                "Edit Post"=>2,
                "Create Post"=>3,
            ],
            "User" => [
                "Delete User"=>1,
                "Create User"=>2,
                "Edit User"=>3,
            ],
            "Employee" => [
                "Delete Employee"=>1,
                "Create Employee"=>2,
                "Edit Employee"=>3,
            ],
            "Tag" => [
                "Create Tag"=>1,
                "Delete Tag"=>2,
                "Edit Tag"=>3,
            ],
            "Product" => [
                "Create Product"=>1,
                "Delete Product"=>2,
                "Edit Product"=>3,
                "Edit Order"=>4,
                "Delete Order"=>5,
            ],
            "Role" => [
                "Create Role"=>1,
                "Delete Role"=>2,
                "Edit Role"=>3,
            ],
            "Notification" => [
                "Create Notification"=>1,
                "Delete Notification"=>2,
                "Edit Notification"=>3,
            ],
        ],
        "Frontend" => [
            "Shop" => [
                "Increase"=>1,
                "Decrease"=>2,
                "Add Cart"=>3,
                "Edit Cart"=>4,
                "Delete Cart"=>5,
                "Comment"=>6,
                "Review"=>7,
            ],
        ],
    ];

    public function children()
    {
        return $this->hasMany(Permission::class, 'parent_id', 'id');
    }

    public function parents()
    {
        return $this->hasOne(Permission::class, 'id', 'parent_id');
    }
    public function permissionsArr()
    {
        return $this->permissionArr;
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'roles_permissions');

    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_permissions');
    }
}
