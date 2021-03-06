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
        $faker = Faker::create();
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => $faker->name(),
            'status' => rand(1, 2),
            'disk' => 'avatars',
            'avatar' =>'default.jpeg',
            'email' => 'baonguyen@gmail.com',
            'password' => bcrypt('123456789'),
            'created_at' => $faker->datetime()->format('Y-m-d H:i:s'),
        ]);
        for ($i = 0; $i < 100; $i++) {
            $files = Storage::files('avatars/users');
            $paths[] = '';
            foreach ($files as $key => $file) {
                $file = str_replace("avatars/", "", $file);
                $paths[$key] = $file;
            }
            DB::table('users')->insert([
                'name' => $faker->name,
                'status' => rand(1, 2),
                'disk' => 'avatars',
                'avatar' => $paths[rand(1,30)],
                'email' => $faker->unique()->freeEmail(),
                'password' => bcrypt('123456789'),
                'created_at' => $faker->datetime()->format('Y-m-d H:i:s'),
            ]);
        }

    }
}