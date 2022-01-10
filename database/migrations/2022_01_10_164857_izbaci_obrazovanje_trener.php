<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IzbaciObrazovanjeTrener extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('treners', function (Blueprint $table) {
            $table->dropColumn('obrazovanje');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('treners', function (Blueprint $table) {
            $table->after('plata', function ($table) {
                $table->string('obrazovanje');
            });
        });
    }
}
