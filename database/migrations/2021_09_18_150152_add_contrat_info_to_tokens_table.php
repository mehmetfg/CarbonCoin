<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContratInfoToTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tokens', function (Blueprint $table) {
            $table->text("main_abi")->after("description")->nullable();
            $table->text("sub_abi")->after("description")->nullable();
            $table->float("usd_price")->after("description")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        if (Schema::hasColumn('tokens', 'main_abi'))
        {
            Schema::table('tokens', function (Blueprint $table) {
                Schema::dropColumns("tokens", "main_abi");
                Schema::dropColumns("tokens","sub_abi");
                Schema::dropColumns("tokens","usd_price");
            });
        }

    }
}
