<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nature_Conge>
 */
class Nature_CongeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'NOM'=> $this->faker->randomElement(['Annuel', 'Exceptionnel', 'Recuperation']),
            'DESCRIPTION'=> $this->faker->randomElement(['Conge Annuel', 'Conge Exceptionnel', 'Conge Recuperation']),
        ];
    }
}
