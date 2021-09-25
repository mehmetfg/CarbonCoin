<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->integer('dealer_id');
            $table->integer('type');
            $table->string('phone')->nullable();
            $table->string('address')->nullable();;
            $table->string('tax_number')->nullable();;
            $table->string('authorized')->nullable();;
            $table->string('web')->nullable();;
            $table->string('logo')->nullable();;
            $table->string('width')->nullable();;
            $table->string('favicon')->nullable();
            $table->integer('status')->nullable();;
            $table->string('language')->nullable();;
            $table->boolean('is_active')->nullable();;
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
