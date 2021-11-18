<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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

        for ($i = 1; $i <= 190; $i++) {
            DB::table('users_roles')->insert([
                'user_id' => $i,
                'role_id' => rand(1, 4),
            ]);
        }

        function treeViewPermission($perArr, $insertedId)
        {
            $id=$insertedId;
            foreach ($perArr as $key => $per) {
                $perM = new Permission();
                $perM->name = $key;
                $perM->slug = Str::slug($key);
                $perM->created_at = now();
                $perM->parent_id = $id;
                $perM->save();
                $values[$key] = $per;
                if (is_array($per)) {
                    $insertedId = $perM->id;
                    treeViewPermission($values[$key], $insertedId);
                }
            }
        }
        $permissions = new Permission();
        $perArr = $permissions->permissionsArr();

        foreach ($perArr as $key => $values) {
            $i=0;
            $perM = new Permission();
            $perM->name = $key;
            $perM->slug = Str::slug($key);
            $perM->created_at = now();
            $perM->parent_id = $i;
            $perM->save();
            $values[$key] = $values;
            if (is_array($values)) {
                $insertedId = $perM->id;
                treeViewPermission($values[$key], $insertedId);
            }

        }

        DB::table('roles')->insert([
            [
                'name' => 'Admin',
                'slug' => 'admin',
            ],
            [
                'name' => 'Admod',
                'slug' => 'admod',
            ],
            [
                'name' => 'Writer',
                'slug' => 'writer',
            ],
            [
                'name' => 'User',
                'slug' => 'user',
            ],
        ]);

        $roleAdmin = Role::where('slug', 'admin')->first();
        $roleAdmod = Role::where('slug', 'admod')->first();
        $roleWriter = Role::where('slug', 'writer')->first();
        $roleUser = Role::where('slug', 'user')->first();
        $permissionsAll= Permission::all();
        foreach ($permissionsAll as $key => $value) {
            $perAction = Permission::where('id', $key)->first();
            $roleAdmin->permissions()->attach($perAction);
            if ($key >= 5) {
                $roleAdmod->permissions()->attach($perAction);
            }
            if ($key >= 15) {
                $roleWriter->permissions()->attach($perAction);
            }
            if ($key > 17) {
                $roleUser->permissions()->attach($perAction);
            }
        }

    }
}