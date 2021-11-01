<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $files = Storage::files('avatars/users');
        $paths[] = '';
        foreach ($files as $key => $file) {
            $file = str_replace("avatars/", "", $file);
            $paths[$key] = $file;
        }
        return [
            'name' => $this->faker->name(),
            'status'=>rand(1,2),
            'disk' =>'avatars',
            'avatar'=>$paths[rand(0,23)],
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('123456789'),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}