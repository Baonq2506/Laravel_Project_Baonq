<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('images')->truncate();
        $dicArr = [
            1 => 'DacVuSieuLinh',
            2 => 'DavBiet',
            3 => 'HacTinh',
            4 => 'SieuPham',
            5 => 'ThanMa',
            6 => 'TienHacAm',
            7 => 'VuTru',
        ];
        $test=array();
        for ($i = 1; $i <= 40; $i++) {
            $randomDicArr = rand(1, 7);
            $disk = 'products/LOL/' . $dicArr[$randomDicArr];
            $files = Storage::files($disk);
            $paths[] = '';
            foreach ($files as $key => $file) {
                $file = str_replace("products/", "", $file);
                $paths[$key] = $file;

            }
            $randomFile = rand(0,10 );
            $path=$paths[$randomFile];
            if( $path==""){
                $path=$paths[2];
            }
            DB::table('images')->insert([
                'name' => $file,
                'path' => $path,
                'product_id' => $i,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }

    }
}