<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Trener;

class ClanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sifra' => $this->faker->unique()->word(),
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'godine' => $this->faker->numberBetween($min = 10, $max = 101),
            'adresa' => $this->faker->streetAddress(),
            'trener_id' => Trener::factory()
        ];
    }
}
