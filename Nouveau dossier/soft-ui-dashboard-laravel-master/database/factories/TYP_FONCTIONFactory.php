<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TYP_FONCTION>
 */
class TYP_FONCTIONFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'CODE_TYPE'=> $this->faker->randomNumber(3, false),
            'LIB_TYPE'=> $this->faker->sentence(),
            'MONTANT'=> $this->faker->randomNumber(NULL, false),
            'CODF_CNRPS'=>$this->faker->sentence(4),
        ];
    }
}
