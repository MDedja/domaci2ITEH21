<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Teretana;

class TrenerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'radno_iskustvo' => $this->faker->numberBetween($min = 1, $max = 45),
            'plata' => $this->faker->numberBetween($min = 45000, $max = 250000),
            'teretana_id' => Teretana::factory()
        ];
    }
}
