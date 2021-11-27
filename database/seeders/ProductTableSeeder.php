<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
        $dicArr = [
            1 => 'Channel',
            2 => 'Gucci',
            3 => 'Lacoste',
            4 => 'Hermes',
            5 => 'LouisVuitton',
        ];
        $faker = Faker::create();
        DB::table('products')->truncate();
        for ($i = 1; $i <= 20; $i++) {
            $randomDicArr = rand(1, 5);
            $disk = 'products/LOL/' . $dicArr[$randomDicArr];
            $files = Storage::files($disk);
            $paths[] = '';
            foreach ($files as $key => $file) {
                $file = str_replace("products/", "", $file);
                $paths[$key] = $file;
            }
            $imageProds=[$paths[rand(1, 9)],$paths[rand(1, 9)]] ;
            $infos = json_encode($imageProds);
            $name = $faker->sentence($nbWords = 3);
            $product = new Product();
            $product->name = $name;
            $product->slug = Str::slug($name);
            $product->content = $faker->text($maxNbChars = 200);
            $product->origin_price = rand(1, 50) . '000';
            $product->sale_price = rand(51, 100) . '000';
            $product->user_created_id = rand(1, 23);
            $product->category_id = $randomDicArr;
            $product->brand_id = rand(1, 5);
            $product->status = rand(1, 4);
            $product->option = $faker->text($maxNbChars = 1000);
            $product->view_count = rand(100, 500);
            $product->sale_count = rand(500, 1000);
            $product->review_count = rand(1, 200);
            $product->info = $infos;
            $product->created_at = $faker->datetime()->format('Y-m-d H:i:s');
            $product->updated_at = $faker->datetime()->format('Y-m-d H:i:s');
            $product->save();
        }
    }
}
