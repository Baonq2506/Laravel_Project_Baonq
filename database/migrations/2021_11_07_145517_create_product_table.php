<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('content');
            $table->string('origin_price');
            $table->string('sale_price');
            $table->integer('user_created_id');
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->integer('status');
            $table->text('option');
            $table->string('view_count');
            $table->string('sale_count');
            $table->string('review_count');
            $table->text('info');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}