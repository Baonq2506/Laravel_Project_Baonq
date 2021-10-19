<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSnLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_sn_links', function (Blueprint $table) {
            $table->integer('user_id');
            $table->string('fb_url')->nullable();
            $table->string('gg_url')->nullable();
            $table->string('linked_url')->nullable();
            $table->string('switter_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_sn_links');
    }
}