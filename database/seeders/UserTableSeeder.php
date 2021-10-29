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
        // User::factory()->count(20)->create();
        $faker = Faker::create();
        $files = Storage::files('avatars/users');
        $paths[] = '';
        foreach ($files as $key => $file) {
            $file = str_replace("avatars/", "", $file);
            $paths[$key] = $file;
        }
        for ($i = 0; $i <= 20; $i++) {
            User::create([
                'name' => $faker->name(),
                'status' => rand(1, 2),
                'disk' => 'avatars',
                'avatar' => $paths[$i],
                'email' => $faker->unique()->safeEmail(),
                'password' => bcrypt('123456789'),
            ]);
        }
    }
}
