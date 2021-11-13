<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProdCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prod_categories')->truncate();
        $ProdCateArr = [
            1 => 'DacVuSieuLinh',
            2 => 'DavBiet',
            3 => 'HacTinh',
            4 => 'SieuPham',
            5 => 'ThanMa',
            6 => 'TienHacAm',
            7 => 'VuTru',
        ];
        for ($i = 1; $i <= 7; $i++) {
            DB::table('prod_categories')->insert([
                'name' => $ProdCateArr[$i],
                'slug' => Str::slug($ProdCateArr[$i]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
