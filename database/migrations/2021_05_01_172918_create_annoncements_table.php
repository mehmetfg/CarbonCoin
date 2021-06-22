<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncementsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annoncements', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('dealer_id')->unsigned();
            $table->string('definition');
            $table->string('message');
            $table->date('finish_date');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('annoncements', function($table) {
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
        Schema::drop('annoncements');
    }
}
