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

        DB::table('user_infos')->truncate();
        UserInfo::factory()->count(20)->create();
    }
}