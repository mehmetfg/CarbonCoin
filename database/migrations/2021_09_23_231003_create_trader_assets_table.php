<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraderAssetsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trader_assets', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('trader_id')->unsigned()->nullable();;
            $table->bigInteger('exchange_id')->unsigned()->nullable();
            $table->integer('type')->nullable();
            $table->string('asset_symbol');
            $table->decimal('balance', 20,14);
            $table->decimal('locked_balance', 20,14);
            $table->timestamps();
            $table->softDeletes();
        });

//        Schema::table('trader_assets', function($table) {
//            $table->engine = 'InnoDB';
//            $table->foreign('trader_id')->references('id')->on('traders');
//        });
//        Schema::table('trader_assets', function($table) {
//            $table->engine = 'InnoDB';
//            $table->foreign('exchange_id')->references('id')->on('exchanges');
//        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trader_assets');
    }
}
