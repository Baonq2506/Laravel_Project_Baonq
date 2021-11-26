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
            'slug' => Str::slug($fake),
            'disk' => 'public',
            'image_url' =>$paths[rand(1,30)],
            'content' => $this->faker->text($maxNbChars = 500),
            'user_created_id' => rand(1, 50),
            'user_updated_id' => rand(1, 10),
            'category_id' => rand(1, 4),
            'status' => rand(1, 3),
            'created_at' =>  $this->faker->datetime()->format('Y-m-d H:i:s'),
            'updated_at' => $this->faker->datetime()->format('Y-m-d H:i:s'),
        ];
    }
}