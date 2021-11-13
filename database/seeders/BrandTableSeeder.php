<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->truncate();
        $brandArr = [
            1 => 'Chanel',
            2 => 'Gucci',
            3 => 'Hermes',
            4 => 'Lacoste',
            5 => 'Louis Vuitton',

        ];
        $disk='products/brand/';
        $files = Storage::files($disk);
        $paths[] = '';
        foreach ($files as $key => $file) {
            $file = str_replace("avatars/", "", $file);
            $paths[$key] = $file;
        }

        for ($i = 0; $i < 5; $i++) {
            DB::table('brands')->insert([
                'name' => $brandArr[$i+1],
                'image' => $paths[$i],
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}