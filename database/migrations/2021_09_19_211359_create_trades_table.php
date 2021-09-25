<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->biginteger('dealer_id')->unsigned();;
            $table->integer('exchange_id')->unsigned();;
            $table->string('asset_pair_name')->nullable();
            $table->integer('type');
            $table->decimal('price', '10', '8');
            $table->decimal('amount');
            $table->string('taker_side')->nullable();
            $table->biginteger('maker_order_id')->nullable();
            $table->biginteger('taker_order_id')->nullable();
            $table->decimal('maker_fee', '10', '8')->nullable();
            $table->decimal('taker_fee', '10', '8')->nullable();
            $table->string('side')->nullable();
            $table->timestamp('inserted_at')->nullable();
            $table->timestamps();
            $table->softDeletes();


        });


        Schema::table('trades', function($table) {
            $table->foreign('dealer_id')->references('id')->on('users');
        });
        Schema::table('trades', function($table) {
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
        Schema::drop('trades');
    }
}
