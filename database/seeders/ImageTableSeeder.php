<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
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

        DB::table('images')->truncate();
        for($i = 1; $i <= 20;$i++){
            $prodInfo=Product::where('id',$i)->get();
            for($j = 0; $j <  count(json_decode($prodInfo[0]->info));$j++ )
           {
               $image= new Image();
               $image->name=json_decode($prodInfo[0]->info)[$j];
               $image->path=json_decode($prodInfo[0]->info)[$j];
               $image->product_id=$i;
               $image->save();
           }
        }
    }
}