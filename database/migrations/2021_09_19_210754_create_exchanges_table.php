<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExchangesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchanges', function (Blueprint $table) {
            $table->increments('id');
            $table->biginteger('dealer_id')->unsigned();
            $table->string('name');
            $table->integer('type')->nullable();
            $table->string('definition')->nullable();
            $table->string('api_key')->nullable();
            $table->string('public_trade_url')->nullable();
            $table->string('private_trade_url')->nullable();
            $table->string('asset_url')->nullable();
            $table->string('orders_url')->nullable();
            $table->string('candles_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('exchanges', function($table) {
            $table->foreign('dealer_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('exchanges');
    }
}
