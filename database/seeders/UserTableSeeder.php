<?php

namespace Database\Seeders;

use App\Models\User;
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
        $files = Storage::files('avatars/users');
        $paths[] = '';
        foreach ($files as $key => $file) {
            $file = str_replace("avatars/", "", $file);
            $paths[$key] = $file;
        }
        DB::table('users')->insert([
            'name' => $this->faker->name(),
            'status'=>rand(1,2),
            'disk' =>'avatars',
            'avatar' => $paths[rand(1,23)],
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('123456789'),
        ]);
    }
}