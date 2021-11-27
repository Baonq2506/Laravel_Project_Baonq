<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class ImageTableSeeder extends Seeder
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
                'name' => $file,
                'path' => $paths[$i],
                'product_id' => $i,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}