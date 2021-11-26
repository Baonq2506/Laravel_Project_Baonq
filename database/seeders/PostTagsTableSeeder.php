<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('post_tags')->truncate();
        for( $i=1;$i<=32;$i++){
            DB::table('post_tags')->insert([
                'post_id'=> $i,
                'tag_id' =>rand(1,7),
            ]);
        }
    }
}