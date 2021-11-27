<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $dicArr = [
            1 => 'Channel',
            2 => 'Gucci',
            3 => 'Lacoste',
            4 => 'Hermes',
            5 => 'LouisVuitton',
        ];

        for ($i = 1; $i <= 20; $i++) {
            $randomDicArr = rand(1, 5);
            $disk = 'products/LOL/' . $dicArr[$randomDicArr];
            $files = Storage::files($disk);
            $paths[] = '';
            foreach ($files as $key => $file) {
                $file = str_replace("products/", "", $file);
                $paths[$key] = $file;
            }
            DB::table('images')->insert([
                'name' => $faker->name,
                'path' => $paths[rand(1, 5)],
                'product_id' => rand(1,20),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
