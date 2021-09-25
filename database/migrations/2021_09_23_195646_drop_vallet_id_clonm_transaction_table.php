<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropValletIdClonmTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('transactions', 'vallet_id'))
        {
            Schema::table('transactions', function (Blueprint $table) {

                $table->dropColumn( "vallet_id");
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->integer("vallet_id")->after("dealer_id")->nullable();
        });
    }
}
