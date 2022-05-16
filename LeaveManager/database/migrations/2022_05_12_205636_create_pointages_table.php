<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pointages', function (Blueprint $table) {
            $table->id();
            $table->string("Matricule");
            $table->date("JourCptPnt");
            $table->date("DateTimePnt");
            $table->tinyInteger("OriginePnt");
            $table->string("PntSourceID");
            $table->string("ValiderPar");
            $table->string("TypeJour");
            $table->tinyInteger("TypeOperation");
            $table->binary("OnPntAnnule");
            $table->integer("AnnulePar");
            $table->string("PntCreerPar");
            $table->date("DateCreation");
            $table->tinyInteger("MotifPntManuelH511");
            $table->tinyInteger("Etat");
            $table->integer("OnCloture");
            $table->binary("DateCloture");
            $table->string("CloturePar");
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
        Schema::dropIfExists('pointages');
    }
}
