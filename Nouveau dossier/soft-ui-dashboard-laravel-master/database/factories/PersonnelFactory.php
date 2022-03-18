<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personnel>
 */
class PersonnelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $namee =$this->faker->name();
        $firstname=substr($namee, 0,strpos($namee, " "));
        $lastname=substr($namee, strpos($namee, " ") );
        if (strpos($namee, " ")>-1)
        {
            $lastname=substr($lastname, strpos($lastname, " ") + 1);
        }

        return [
            'PERS_MAT_95'=> $this->faker->randomNumber(9, false),
            'PERS_MAT_ACT'=> $this->faker->randomNumber(7, false),
            'PERS_NUMASS_94'=> $this->randomNumber(9, false),
            'PERS_NATURAGENT_93'=> $this->faker->word,
            'PERS_CODFONC_92'=> $this->faker->randomNumber(4, false),
            'PERS_CODGROUP_92'=> $this->faker->randomNumber(4, false),
            'PERS_CET_9'=> $this->faker->randomNumber(4, false),
            'PERS_NOM_X40'=> $this->faker->$namee,
            'PERS_NOM'=> $this->faker->$firstname,
            'PERS_PRENOM'=> $this->faker->$lastname,
            'EMAIL'=> $this->faker->freeEmail,
            'PERS_SEXE_X'=> $this->faker->randomElement(['f' ,'h']),
            'PERS_ETACIVIL_X'=> $this->faker->word,
            'PERS_NIFILLE_X20'=> $this->faker->word,
            'PERS_CODECHEFFAMIL_X'=> $this->faker->word,
            'PERS_ENFANT_92'=> $this->faker->randomElement([0,1,2,3,4,5,6]),
            'PERS_ENFSOC_9'=> $this->faker->randomNumber(4, false),
            'PERS_ENFISC_9'=> $this->faker->randomNumber(4, false),
            'PERS_DATE_NAIS'=> $this->faker->date,
            'PERS_LNAIS_X16'=> $this->faker->word,
            'PERS_PIDENTNUM_X13'=> $this->faker->word,
            'PERS_PIDENT_DATE_EMIS'=> $this->faker->date,
            'PERS_PIDENTLEMIS_X12'=> $this->faker->word,
            'PERS_ADR_X60'=> $this->faker->address,
            'PERS_TEL_98'=> $this->faker->phoneNumber,
            'PERS_CONDLOGE_9'=> $this->faker->randomNumber(4, false),
            'PERS_NATION_X16'=> $this->faker->word,
            'PERS_GSANG_X3'=> $this->faker->word,
            'PERS_MONTALLEFAM_95'=> $this->faker->randomNumber(4, false),
            'PERS_MONTSALUNIQ_95'=> $this->faker->randomNumber(4, false),
            'PERS_NOMCONJ_X40'=> $this->faker->word,
            'PERS_DATE_NASCONJ'=> $this->faker->date,
            'PERS_LNAISCONG_X16'=> $this->faker->word,
            'PERS_NATIONCONJ_X16'=> $this->faker->word,
            'PERS_PROFCONJ_X25'=> $this->faker->word,
            'PERS_EMPLCONJ_X30'=> $this->faker->randomNumber(4, false),
            'PERS_NUMLETREC_95'=> $this->faker->randomNumber(4, false),
            'PERS_DATE_LETREC'=> $this->faker->date,
            'PERS_DATE_REC'=> $this->faker->date,
            'PERS_ECHELREC_92'=> $this->faker->randomNumber(4, false),
            'PERS_CLASREC_X'=> $this->faker->date,
            'PERS_CHELONREC_92'=> $this->faker->date,
            'PERS_DATE_CONF'=> $this->faker->date,
            'PERS_CLASCONG_X'=> $this->faker->word,
            'PERS_DATE_EFECHCONF'=> $this->faker->date,
            'PERS_ECHELCONF_92'=> $this->faker->randomNumber(4, false),
            'PERS_QUALIF_X45'=> $this->faker->word,
            'PERS_NUMCNSS_X16'=> $this->faker->word,
            'PERS_NUMCNR_X10'=> $this->faker->word,
            'PERS_SITAGEN_9'=> $this->faker->randomNumber(4, false),
            'PERS_CATPERS_9'=> $this->faker->randomNumber(4, false),
            'PERS_NATPERS_9'=> $this->word,
            'PERS_AFFECT_92'=> $this->faker->word,
            'PERS_CENTRECOUT_94'=> $this->faker->word,
            'PERS_ORDING_9'=> $this->faker->randomNumber(4, false),
            'PERS_CODPAI_9'=> $this->faker->randomNumber(4, false),
            'PERS_EXPERTISE_92'=> $this->faker->randomNumber(4, false),
            'PERS_NUMCOMPT_X15'=> $this->faker->randomNumber(4, false),
            'PERS_CODBANK_92'=> $this->faker->randomNumber(4, false),
            'PERS_CODAGENC_93'=> $this->faker->randomNumber(4, false),
            'PERS_SALBASE_96'=> $this->faker->randomNumber(4, false),
            'password'=> $this->faker->word,
        ];
    }
}
