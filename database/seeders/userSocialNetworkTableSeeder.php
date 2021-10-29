<?php

namespace Database\Seeders;

use App\Models\UserLink;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class userSocialNetworkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('user_sn_links')->truncate();
        for ($i = 1; $i <= 10; $i++) {
            DB::table('user_sn_links')->insert([
                'user_id' => $i,
                'fb_url' => 'https://www.facebook.com/',
                'gg_url' => 'https://www.facebook.com/',
                'linked_url' => 'https://www.facebook.com/',
                'switter_url' => 'https://www.facebook.com/',
            ]);
        }

    }
}
