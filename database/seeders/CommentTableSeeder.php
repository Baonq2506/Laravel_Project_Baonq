<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        // DB::table('comments')->truncate();
        for($i=1;$i<=60;$i++){
            $idUser= rand(1,23);
            DB::table('comments')->insert([
                'user_id'=>$idUser,
                'product_id'=>rand(1,40),
                'content'=>$faker->text($maxNbChars = 500),
                'parent_id' =>null,
                'created_at'=> $faker->datetime()->format('Y-m-d H:i:s'),
            ]);
        }

    }
}
