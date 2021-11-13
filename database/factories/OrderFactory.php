<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $randomUserID=rand(1,23);
        $userArr=User::find($randomUserID);
        $user_info=json_encode($userArr);

        return [
            'user_id' =>$randomUserID,
            'user_info'=> $user_info,
            'money_total' =>'500000',
            'status'=>rand(1,3),
            'payment method'=>rand(1,2),
            'created_at'=> $this->faker->datetime()->format('Y-m-d H:i:s'),
            'updated_at'=> $this->faker->datetime()->format('Y-m-d H:i:s'),
        ];
    }
}