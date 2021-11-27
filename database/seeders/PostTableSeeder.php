<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('posts')->truncate();
        $files = Storage::files('images/Blogs');
        for ($i = 0; $i < 20; $i++) {
            $paths[] = '';
            $fake = $faker->sentence(3);
            foreach ($files as $key => $file) {
                $file = str_replace("images/", "", $file);
                $paths[$key] = $file;
            }
            DB::table('posts')->insert([
                'title' => $fake,
                'slug' => Str::slug($fake),
                'disk' => 'public',
                'image_url' => 'default.jpg',
                'content' => $faker->text($maxNbChars = 500),
                'user_created_id' => rand(1, 50),
                'user_updated_id' => rand(1, 10),
                'category_id' => rand(1, 4),
                'status' => rand(1, 3),
                'created_at' => $faker->datetime()->format('Y-m-d H:i:s'),
                'updated_at' => $faker->datetime()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}