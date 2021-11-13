<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->truncate();
        for ($i = 1; $i < 40; $i++) {
            $randomUserID = rand(1, 23);
            $userArr = User::find($randomUserID);
            $user_info = json_encode($userArr);
            $orders = DB::table('order_product')->where('order_id', $i)->get();
            $money_total = $orders->sum('money_total');
            DB::table('orders')->insert([
                'user_id' => $randomUserID,
                'user_info' => $user_info,
                'money_total' => $money_total,
                'status' => rand(1, 3),
                'payment_method' => rand(1, 2),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}