<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->country();

        return [
            'name' => $name,
            'lenght' => $this->faker->numberBetween(1000,5000)
        ];
    }
}
