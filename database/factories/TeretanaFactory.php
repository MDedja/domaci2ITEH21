<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeretanaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv_teretane' => $this->faker->company(),
            'lokacija' => $this->faker->address(),
            'grad' => $this->faker->city(),
            'broj_clanova' => $this->faker->numberBetween($min = 1, $max = 15000)
        ];
    }
}
