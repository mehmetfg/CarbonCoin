<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnowYourCustomersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('know_your_customers', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('dealer_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('name');
            $table->string('surname');
            $table->date('birthday');
            $table->string('id_card_serial');
            $table->string('id_card_number');
            $table->string('status')->nullable();
            $table->string('is_active')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('know_your_customers', function($table) {
            $table->foreign('dealer_id')->references('id')->on('users');
        });
        Schema::table('know_your_customers', function($table) {
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
        Schema::drop('know_your_customers');
    }
}
