<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'provider_name',
        'facebook_id',
        'google_id',
        'password',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'provider_name',
        'facebook_id',
        'google_id',
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    protected $statusArr = [
        1 => 'Active',
        2 => 'No-Active',
    ];
    protected $colorArr=[
        1=>'green',
        2=>'red',
    ];
    protected $statusColor = [
        1 => 'success',
        2 => 'danger',
    ];

    protected $genderArr = [
        1=>'Male',
        2=>'Female',
        3=>'Other',
    ];
    public function getGenderTextAttribute(){

        return $this->genderArr[$this->userInfo->gender];
    }
    public function getStatusTextAttribute()
    {
        return '<span style="background:'.$this->colorArr[$this->status].'" class="badge badge-' . $this->statusColor[$this->status] .'">' . $this->statusArr[$this->status] . '<span>';

    }

    public function userInfo()
    {
        return $this->hasOne(UserInfo::class);
    }

    Public function userLink(){
        return $this->hasOne(UserLink::class,'user_id');
    }

    public function post()
    {
        return $this->hasMany(Post::class, 'id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'users_roles');
    }
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'users_permissions');
    }
    protected function hasPermission($permission) {

        return (bool) $this->permissions->where('slug', $permission->slug)->count();
      }

    public function hasPermissionTo($permission)
    {
        return $this->hasPermissionThroughRole($permission) || $this->hasPermission($permission);
    }

    public function hasPermissionThroughRole($permission)
    {
        foreach ($permission->roles as $role) {
            if ($this->roles->contains($role)) {
                return true;
            }
        }
        return false;
    }

    public function getIsAdminAttribute()
    {
        return $this->roles()->where('id', 1)->exists();
    }
}