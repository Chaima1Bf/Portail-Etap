<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateH52MvtPointageBrutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h52_mvt_pointage_bruts', function (Blueprint $table) {
            $table->string("Matricule",10);
            $table->date("JourCptPnt");
            $table->date("DateTimePnt");
            $table->tinyInteger("OriginePnt");
            $table->string("PntSourceID",15);
            $table->string("ValiderPar",10);
            $table->string("TypeJour",3);
            $table->tinyInteger("TypeOperation");
            $table->binary("OnPntAnnule");
            $table->integer("AnnulePar",10);
            $table->string("PntCreerPar",10);
            $table->date("DateCreation");
            $table->tinyInteger("MotifPntManuelH511");
            $table->tinyInteger("Etat");
            $table->integer("OnCloture");
            $table->binary("DateCloture");
            $table->string("CloturePar",10);
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
        Schema::dropIfExists('h52_mvt_pointage_bruts');
    }
}
