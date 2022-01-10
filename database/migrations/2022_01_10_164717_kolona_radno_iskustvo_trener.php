<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KolonaRadnoIskustvoTrener extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('treners', function (Blueprint $table) {
            $table->after('prezime', function ($table) {
                $table->integer('radno_iskustvo');
            });
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
            $table->dropColumn('radno_iskustvo');
        });
    }
}
