<?php

namespace Database\Factories;

use App\Models\UserInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserInfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserInfo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

            return [
                'user_id' => rand(1,20),
                'address'=> $this->faker->address,
                'gender' => rand(1,3),
                'phone'=> $this->faker->phoneNumber,
                'city' => $this->faker->city,
                'country' => $this->faker->country,
                'date' => now(),
                'description' =>$this->faker->sentence(16),
                'created_at'=>now(),
                'updated_at'=>now(),
            ];

    }
}