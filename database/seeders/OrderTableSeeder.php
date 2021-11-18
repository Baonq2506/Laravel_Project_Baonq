<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('orders')->truncate();
        for ($i = 1; $i < 130; $i++) {
            $randomUserID = rand(1, 130);
            $userArr = User::find($randomUserID);
            $user_info = json_encode($userArr);
            $orders = DB::table('order_product')->where('order_id', $i)->get();
            $money_total = $orders->sum('money_total');
            DB::table('orders')->insert([
                'user_id' => $randomUserID,
                'user_info' => $user_info,
                'money_total' => $money_total,
                'status' => rand(1, 4),
                'payment_method' => rand(1, 2),
                'created_at'=> $faker->dateTimeBetween($startDate = '- 10 months', $endDate = 'now + 1 months'),
                'updated_at'=> $faker->dateTimeBetween($startDate = '- 11 months', $endDate = 'now'),
            ]);
        }
    }
}