<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trener;

class TrenerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trener::factory()->count(25)->create();
    }
}
