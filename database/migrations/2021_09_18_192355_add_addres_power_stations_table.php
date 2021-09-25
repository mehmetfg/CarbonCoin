<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddresPowerStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('power_stations', function (Blueprint $table) {
            $table->string("wallet_address", 250)->after("address")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('power_stations', 'wallet_address'))
        {
            Schema::table('power_stations', function (Blueprint $table) {
                Schema::dropColumns("power_stations", "wallet_address");
            });
        }

    }
}
