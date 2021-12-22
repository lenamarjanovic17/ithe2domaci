<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ZahtevFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'iznos'=> $this->faker->numberBetween(150000,5000000),
            'period_otplate'=>$this->faker->numberBetween(12,250),
            'kredit_id'=>$this->faker->numberBetween(1,8),
            'user_id'=>$this->faker->numberBetween(1,10)
        ];
    }
}
