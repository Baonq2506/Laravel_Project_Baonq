<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\UserInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class userInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
       $userInfo= new UserInfo();
        DB::table('user_infos')->truncate();
        for( $i=1;$i<=20;$i++){
            DB::table('user_infos')->insert([
                'user_id' => $i,
                'address'=> $userInfo->faker->address,
                'gender' => rand(1,3),
                'phone'=> $userInfo->faker->phoneNumber,
                'city' => $userInfo->faker->city,
                'country' => $userInfo->faker->country,
                'date' => now(),
                'description' =>$userInfo->faker->sentence(16),
                'created_at'=>now(),
                'updated_at'=>now(),

            ]);
        }
    }
}
