<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class OrderProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('order_product')->truncate();
          $faker = Faker::create();
          for($i=1;$i<=300;$i++){
            $sale_price =rand(1,50).'00000';
            $prod_count= rand(5,20);
            $discount_value = 20000;
            DB::table('order_product')->insert( [
                'order_id' =>rand(1,130),
                'product_id' =>rand(1,200),
                'prod_count'=>$prod_count,
                'discount_value' =>$discount_value,
                'sale_price' =>$sale_price,
                'money_total' =>$sale_price*$prod_count-$discount_value,
                'created_at'=> $faker->date('Y-m-d H:i:s'),
                'updated_at'=> $faker->date('Y-m-d H:i:s'),
            ]);
      }
          }
}