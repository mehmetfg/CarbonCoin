<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokensTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokens', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('dealer_id')->unsigned();;
            $table->string('name');
            $table->string('symbol');
            $table->integer('total_supply');
            $table->integer('decimal');
            $table->string('owner_address');
            $table->string('contract_address');
            $table->string('definition')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->nullable();;
            $table->boolean('is_active')->default(1)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('tokens', function($table) {
            $table->foreign('dealer_id')->references('id')->on('users');
        });
        Schema::table('messages', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tokens');
    }
}
