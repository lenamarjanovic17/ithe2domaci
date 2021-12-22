<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KreditFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "naziv" =>$this->faker->word,
            "minimun_primanja" => $this->faker->numberBetween(0,30000),
            "minimum_zaposlen" =>$this->faker->numberBetween(0,3),
            "maksimum_zaposlen" =>$this->faker->numberBetween(3,30),
            "minimalni_iznos" =>$this->faker->numberBetween(10000,500000),
            "maksimalni_iznos" =>$this->faker->numberBetween(500000,10000000),
            "minimalni_period" =>$this->faker->numberBetween(3,12),
            "maksimalni_period" =>$this->faker->numberBetween(12,360),
            "kamatna_stopa" =>$this->faker->numberBetween(1,25)
        ];
    }
}
