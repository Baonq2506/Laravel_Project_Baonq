<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\UserInfo;

class userInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {

        $faker = Faker::create();
        DB::table('user_infos')->truncate();
        $gender=[
            1=>'Female',
            2=>'Male',
        ];

        for( $i=1;$i<=10;$i++){
            DB::table('user_infos')->insert([
                'user_id' => $i,
                'address'=> $faker->address,
                'gender' => $gender[rand(1,2)],
                'phone'=> $faker->phoneNumber,

            ]);
        }
    }
}