<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Faker\Factory as Faker;
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
        $factory= new Factory();
        $faker = $factory->Faker::create();
        DB::table('user_infos')->truncate();
        for( $i=1;$i<=20;$i++){
            DB::table('user_infos')->insert([
                'user_id' => $i,
                'address'=> $faker->address,
                'gender' => rand(1,3),
                'phone'=> $faker->phoneNumber,
                'city' => $faker->city,
                'country' => $faker->country,
                'date' => now(),
                'description' =>$faker->sentence(16),
                'created_at'=>now(),
                'updated_at'=>now(),

            ]);
        }
    }
}