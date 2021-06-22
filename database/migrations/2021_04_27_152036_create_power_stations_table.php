<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePowerStationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('power_stations', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('dealer_id')->unsigned();
            $table->integer('vallet_id')->unsigned();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('address');
            $table->string('web')->nullable();
            $table->decimal(' installed_power');
            $table->string('tax_number')->nullable();
            $table->string('authorized')->nullable();
            $table->date('paid_date');
            $table->string('description')->nullable();
            $table->integer('status')->nullable();
            $table->boolean('is_active')->nullable()->default(1);
            $table->string('doc1')->nullable();
            $table->string('doc2')->nullable();
            $table->string('doc3')->nullable();
            $table->string('doc4')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('power_stations', function($table) {
            $table->foreign('dealer_id')->references('id')->on('users');
        });
        Schema::table('power_stations', function($table) {
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
        Schema::drop('power_stations');
    }
}
