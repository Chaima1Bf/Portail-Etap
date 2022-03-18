<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nat_ABS>
 */
class Nat_ABSFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'CODE_ABS'=> $this->faker->randomNumber(9, false),
            'LIBELLE_ABS'=> $this->faker->randomElement(['FIN DETACHEMENT',
                'RADIER',
                'DISPONIBILITE',
                'SANS-SOLDE',
                'SOUS-DRAPEAUX',
                'MALADIE',
                'MAL-NON-PAYEE',
                'MAL-PROFESSIONNELLE',
                'ACCIDENT-TRAVAIL',
                'MATERNITE',
                'IRREGULIERE',
                'DETACHEMENT',
                'SANCTION',
                'DISPONIBILITE-SPECIALE',
                'POST-NATAL',
                'HOSPITALISATION',
                'MI-TEMPS',
                'MAL LONGUE DUREE',
                'CONFINEMENT']),
            'TYPE_ABS'=> $this->faker->randomNumber(NULL, false),
            'TYPE_ABS_PR'=> $this->faker->randomNumber(NULL, false),
            'TYPE_ABS_13'=> $this->faker->randomNumber(NULL, false),
            'TYPE_ABS_PROD'=> $this->faker->randomNumber(NULL, false),
            'TYPE_ABS_CNR'=> $this->faker->randomNumber(NULL, false),
        ];
    }
}
