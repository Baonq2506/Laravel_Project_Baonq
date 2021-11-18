<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Updatecommentstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('product_id');
            $table->integer('status');
            $table->integer('parent_id');
            $table->text('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropColumn('content');
            $table->dropColumn('user_id');
            $table->dropColumn('product_id');
            $table->dropColumn('status');
            $table->dropColumn('parent_id');
        });
    }
}
