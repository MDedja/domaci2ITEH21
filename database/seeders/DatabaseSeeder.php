<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ClanSeeder;
use Database\Seeders\TrenerSeeder;
use Database\Seeders\TeretanaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $cs = new ClanSeeder();
        $ter = new TeretanaSeeder();
        $tr = new TrenerSeeder();

        $cs->run();
        $ter->run();
        $tr->run();
    }
}
