<?php

namespace Database\Seeders;

use App\Models\Image;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('products')->truncate();
        for ($i = 1; $i <= 20; $i++) {
            $name = $faker->sentence($nbWords = 3);
            $randomDicArr = rand(1, 5);
            $imageProd = Image::where('product_id', $i)->get('path');
            if (is_null($imageProd)) {
                $imageProd = Image::where('product_id', 5)->get('path');
            }
            $info = json_encode($imageProd);

            DB::table('products')->insert([
                'name' => $name,
                'slug' => Str::slug($name),
                'content' => $faker->text($maxNbChars = 200),
                'origin_price' => rand(1, 50) . '000',
                'sale_price' => rand(51, 100) . '000',
                'user_created_id' => rand(1, 23),
                'category_id' => $randomDicArr,
                'brand_id' => rand(1, 5),
                'status' => rand(1, 4),
                'option' => $faker->text($maxNbChars = 1000),
                'view_count' => rand(100, 500),
                'sale_count' => rand(500, 1000),
                'review_count' => rand(1, 200),
                'info' => $info,
                'created_at' => $faker->datetime()->format('Y-m-d H:i:s'),
                'updated_at' => $faker->datetime()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
