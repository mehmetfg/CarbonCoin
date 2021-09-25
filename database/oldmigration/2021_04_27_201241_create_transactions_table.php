<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->biginteger('dealer_id')->unsigned();
            $table->integer('vallet_id')->unsigned();
            $table->integer('type')->default(1);
            $table->string('definition')->nullable();
            $table->string('description')->nullable();
            $table->string('address');
            $table->decimal('quentity');
            $table->datetime('date');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('transactions', function($table) {
            $table->foreign('dealer_id')->references('id')->on('users');
        });
        Schema::table('transactions', function($table) {
            $table->foreign('vallet_id')->references('id')->on('vallets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transactions');
    }
}
