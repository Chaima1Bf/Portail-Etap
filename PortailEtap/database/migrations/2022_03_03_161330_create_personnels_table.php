<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->integer('PERS_MAT_95')->primary();
            $table->integer('PERS_MAT_ACT');
            $table->integer('PERS_NUMASS_94');
            $table->string('PERS_NATURAGENT_93',40);
            $table->integer('PERS_CODFONC_92');
            $table->integer('PERS_CODGROUP_92');
            $table->integer('PERS_CET_9');
            $table->string('PERS_NOM_X40',250);
            $table->string('PERS_NOM',100);
            $table->string('PERS_PRENOM',100);
            $table->string('EMAIL',200);
            $table->string('PERS_SEXE_X',1);
            $table->string('PERS_ETACIVIL_X',1);
            $table->string('PERS_NIFILLE_X20',20);
            $table->string('PERS_CODECHEFFAMIL_X',1);
            $table->integer('PERS_ENFANT_92');
            $table->integer('PERS_ENFSOC_9');
            $table->integer('PERS_ENFISC_9');
            $table->date('PERS_DATE_NAIS');
            $table->string('PERS_LNAIS_X16',16);
            $table->string('PERS_PIDENTNUM_X13',16);
            $table->date('PERS_PIDENT_DATE_EMIS');
            $table->string('PERS_PIDENTLEMIS_X12',12);
            $table->string('PERS_ADR_X60',250);
            $table->integer('PERS_TEL_98');
            $table->integer('PERS_CONDLOGE_9');
            $table->string('PERS_NATION_X16',16);
            $table->string('PERS_GSANG_X3',3);
            $table->integer('PERS_MONTALLEFAM_95');
            $table->integer('PERS_MONTSALUNIQ_95');
            $table->string('PERS_NOMCONJ_X40',40);
            $table->date('PERS_DATE_NASCONJ');
            $table->string('PERS_LNAISCONG_X16',16);
            $table->string('PERS_NATIONCONJ_X16',16);
            $table->string('PERS_PROFCONJ_X25');
            $table->string('PERS_EMPLCONJ_X30',30);
            $table->integer('PERS_NUMLETREC_95');
            $table->date('PERS_DATE_LETREC');
            $table->date('PERS_DATE_REC');
            $table->integer('PERS_ECHELREC_92');
            $table->string('PERS_CLASREC_X',1);
            $table->integer('PERS_CHELONREC_92');
            $table->date('PERS_DATE_CONF');
            $table->string('PERS_CLASCONG_X',1);
            $table->date('PERS_DATE_EFECHCONF');
            $table->integer('PERS_ECHELCONF_92');
            $table->string('PERS_QUALIF_X45',45);
            $table->string('PERS_NUMCNSS_X16',16);
            $table->string('PERS_NUMCNR_X10',20);
            $table->integer('PERS_SITAGEN_9');
            $table->integer('PERS_CATPERS_9');
            $table->integer('PERS_NATPERS_9');
            $table->string('PERS_AFFECT_92',2);
            $table->string('PERS_CENTRECOUT_94',5);
            $table->integer('PERS_ORDING_9');
            $table->integer('PERS_CODPAI_9');
            $table->integer('PERS_EXPERTISE_92');
            $table->integer('PERS_NUMCOMPT_X15');
            $table->integer('PERS_CODBANK_92');
            $table->integer('PERS_CODAGENC_93');
            $table->integer('PERS_SALBASE_96');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnels');
    }
};
