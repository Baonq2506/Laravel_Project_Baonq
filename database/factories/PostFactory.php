<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fake = $this->faker->sentence(3);
        $files = Storage::files('public/Blogs');
        $paths[] = '';
        foreach ($files as $key => $file) {
            $file = str_replace("public/", "", $file);
            $paths[$key] =  $file;
        }
        return [
            'title' => $fake,
            'image_url' => $this->faker->imageUrl($width = 640, $height = 480),
            'slug' => Str::slug($fake),
            'disk' => 'public',
            'image_url' =>$paths[rand(1,33)],
            'content' => $this->faker->text($maxNbChars = 1000),
            'user_created_id' => rand(1, 10),
            'user_updated_id' => rand(1, 10),
            'category_id' => rand(1, 4),
            'status' => rand(1, 2),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
