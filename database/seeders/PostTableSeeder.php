<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
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
        for($i=0;$i<30;$i++){
        $fake = $faker->sentence(3);
        $files = Storage::files('public/Blogs');
        $paths[] = '';
        foreach ($files as $key => $file) {
            $file = str_replace("public/", "", $file);
            $paths[$key] =  $file;
        }
        $pathID=rand(1,20);
        DB::table('posts')->insert([
            'title' => $fake,
            'slug' => Str::slug($fake),
            'disk' => 'public',
            'image_url' =>'default.jpg',
            'content' => $faker->text($maxNbChars = 500),
            'user_created_id' => rand(1, 50),
            'user_updated_id' => rand(1, 10),
            'category_id' => rand(1, 4),
            'status' => rand(1, 3),
            'created_at' =>  $faker->datetime()->format('Y-m-d H:i:s'),
            'updated_at' => $faker->datetime()->format('Y-m-d H:i:s'),
        ]);
    }
    }
}
