<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('users')->truncate();
        User::factory()->count(23)->create();
        // $faker = Faker::create();
        // $files = Storage::files('avatars/users');
        // $paths= array();
        // foreach ($files as $key => $file) {
        //     $file = str_replace("avatars/", "", $file);
        //     $paths[$key] = $file;
        // }
            // $user = new User();
            // $user->name = "Nguyen Quoc Bao";
            // $user->status = rand(1, 2);
            // $user->disk = 'avatars';
            // $user->avatar = 'users/anh-gai-dep-han-quoc-cute.jpg';
            // $user->email = 'baonq@gmail.com';
            // $user->password = bcrypt('123456789');
            // $user->save();
            // $user->roles()->attach(1);


    }
}