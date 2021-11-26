<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('reviews')->truncate();
        for($i=1;$i<=40;$i++){
            $prod= rand(1,40);
            DB::table('reviews')->insert([
                'user_id'=>rand(1,23),
                'product_id'=>$prod,
                'favories' =>rand(1,1000),
                'star' =>rand(1,5),
                'content'=>$faker->text($maxNbChars = 500),
                'parent_id' =>null,
                'created_at'=> $faker->datetime()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
