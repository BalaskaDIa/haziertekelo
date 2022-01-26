<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \Illuminate\Support\Str;

class HaziFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nev' => Str::headline($this->faker->name()),
            'bekuldes' => $this->faker->date('Y-m-d'),
            'jegy' => $this->faker->randomDigit(),
        ];
    }
}
