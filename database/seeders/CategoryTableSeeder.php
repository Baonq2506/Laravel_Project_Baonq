<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        $categories=['Điện Thoại','Máy Tính','Phần Cứng','Phần Mềm'];
        foreach($categories as $category){
            DB::table('categories')->insert([
                'name' => $category,
                'slug'=>Str::slug($category),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}