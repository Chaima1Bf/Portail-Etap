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
        Schema::create('nat__abs', function (Blueprint $table) {
            $table->integer("CODE_ABS")->primary();
            $table->enum("LIBELLE_ABS",[
                'FIN DETACHEMENT',
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
                'CONFINEMENT'
            ]);
            $table->string("TYPE_ABS",10);
            $table->integer("TYPE_ABS_PR");
            $table->integer("TYPE_ABS_13");
            $table->integer("TYPE_ABS_PROD");
            $table->integer("TYPE_ABS_CNR");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nat__abs');
    }
};
