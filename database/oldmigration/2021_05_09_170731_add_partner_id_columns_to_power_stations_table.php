<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPartnerIdColumnsToPowerStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('power_stations', function (Blueprint $table) {
            $table->bigInteger('partner_id')
                ->after('dealer_id')
                ->unsigned()
                ->nullable();
        });
        Schema::table('power_stations', function($table) {
            $table->foreign('partner_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('power_stations', function (Blueprint $table) {
            $table->dropColumn('partner_id');
        });
    }
}
