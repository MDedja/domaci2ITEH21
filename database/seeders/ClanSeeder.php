<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clan;

class ClanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clan::factory()->count(50)->create();
    }
}
