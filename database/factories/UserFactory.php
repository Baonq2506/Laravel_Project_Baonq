<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    protected $roleArr=[
        1=>'admin',
        2=>'admod',
        3=>'writer',
        4=>'user',
    ];
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'role'=> $this->roleArr[rand(1,4)],
            'status'=>rand(1,2),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('123456789'), // password
            'avatar'=>$this->faker->imageUrl($width = 640, $height = 480),
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