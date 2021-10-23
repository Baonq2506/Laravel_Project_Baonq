<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;

class RolePermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->truncate();
        DB::table('roles')->truncate();
        DB::table('roles_permissions')->truncate();
        DB::table('users_permissions')->truncate();
        DB::table('users_roles')->truncate();

        for($i=1;$i<=20;$i++){
        DB::table('users_roles')->insert([
            'user_id' => $i,
            'role_id'=>rand(1,4),
        ]);
    }
        DB::table('permissions')->insert([
            [
                'name' => 'Create Post',
                'slug' => 'create-post'
            ],
            [
                'name' => 'Update Post',
                'slug' => 'update-post'
            ],
            [
                'name' => 'Delete Post',
                'slug' => 'delete-post'
            ],
        ]);

        DB::table('roles')->insert([
            [
                'name' => 'Admin',
                'slug' => 'admin'
            ],
            [
                'name' => 'Admod',
                'slug' => 'admod'
            ],
            [
                'name' => 'Writer',
                'slug' => 'writer'
            ],
        ]);


    }
}