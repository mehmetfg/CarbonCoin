<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValletsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vallets', function (Blueprint $table) {
            $table->increments('id');
            $table->biginteger('dealer_id')->unsigned();
            $table->integer('token_id')->unsigned();
            $table->biginteger('user_id')->unsigned();
            $table->string('name');
            $table->string('public_key');
            $table->string('private_key');
            $table->string('id_card_number');
            $table->decimal('balance')->nullable();
            $table->decimal('progress_payment')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('vallets', function($table) {
            $table->foreign('dealer_id')->references('id')->on('users');
        });
        Schema::table('vallets', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('vallets', function($table) {
            $table->foreign('token_id')->references('id')->on('tokens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vallets');
    }
}
