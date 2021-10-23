<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->softDeletes();
            $table->string('provider_name')->nullable()->after('id');
            $table->string('facebook_id')->nullable()->after('provider_name');
            $table->string('google_id')->nullable()->after('provider_name');
            $table->string('avatar')->nullable()->after('email');

            $table->integer('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('provider_name');
            $table->dropColumn('facebook_id');
            $table->dropColumn('google_id');
            $table->dropColumn('avatar');
            $table->dropSoftDeletes();
        });
    }
}