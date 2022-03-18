<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Absence>
 */
class AbsenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'ABS_MAT_95'=> $this->faker->randomNumber(9, false),
        'ABS_NUMORD_93'=> $this->faker->randomNumber(NULL, false),
        'ABS_NAT_9'=> $this->faker->randomNumber(NULL, false),
        'ABS_CET_9'=> $this->faker->randomNumber(NULL, false),
        'ABS_DATE_DEB'=> $this->faker->date,
        'ABS_PERDEB_X'=> $this->faker->randomElement(['Apres-midi' ,'Matin']),
        'ABS_DATE_FIN'=> $this->faker->date,
        'ABS_PERFIN_X'=> $this->faker->randomElement(['Apres-midi' ,'Matin']),
        'ABS_NBRJOUR_93'=> $this->faker->randomNumber(NULL, false),
        'ABS_CUMULE_9'=> $this->faker->randomNumber(NULL, false),
        ];
    }
}
