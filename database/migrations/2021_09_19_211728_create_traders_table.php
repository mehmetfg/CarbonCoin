<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traders', function (Blueprint $table) {
            $table->increments('id');
            $table->biginteger('dealer_id')->unsigned();;
            $table->integer('exchange_id')->unsigned();;
            $table->integer('type')->nullable();
            $table->string('name');
            $table->string('secret_key')->nullable();
            $table->string('public_key')->nullable();
            $table->timestamps();
            $table->softDeletes();


        });
        Schema::table('traders', function($table) {
            $table->foreign('dealer_id')->references('id')->on('users');
        });
        Schema::table('traders', function($table) {
            $table->foreign('exchange_id')->references('id')->on('exchanges');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('traders');
    }
}
