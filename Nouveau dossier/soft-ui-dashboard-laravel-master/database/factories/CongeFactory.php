<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conge>
 */
class CongeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'CONG_MAT_95'=> $this->faker->date,
            'CONG_NUMORD_93'=> $this->faker->date,
            'CONG_NAT_9'=> $this->faker->date,
            'CONG_MOTIF_X40'=> $this->faker->date,
            'CONG_CET_9'=> $this->faker->date,
            'CONG_ANCSOLD_93'=> $this->faker->randomFloat(),
            'CONG_NBRJOUR_93'=> $this->faker->numberBetween($min = 1, $max = 365),
            'CONG_NOVSOLD_93'=> $this->faker->randomFloat(),
            'CONG_DATE_DEB'=> $this->faker->date,
            'CONG_PERDEB_X'=> $this->faker->randomElement(['Apres-midi' ,'Matin']),
            'CONG_DATE_FIN'=> $this->faker->date,
            'CONG_PERFIN_X'=> $this->faker->randomElement(['Apres-midi' ,'Matin']),
            'CONG_INTERIM_X20'=> $this->faker->date,
            'CONG_ADRES_X30'=> $this->faker->address,
            'CONG_TEL_98'=> $this->faker->phoneNumber,
            'CONG_DEMI_PER'=> $this->faker->date,
        ];
    }
}
