<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teretana;

class TeretanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teretana::factory()->count(15)->create();
    }
}
