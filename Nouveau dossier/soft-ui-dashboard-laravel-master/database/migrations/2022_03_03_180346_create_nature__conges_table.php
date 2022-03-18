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
        Schema::create('nature__conges', function (Blueprint $table) {
            $table->Increments('CODE');
            $table->enum('NOM',['Annuel', 'Exceptionnel', 'Recuperation']);
            $table->enum('DESCRIPTION',['Conge Annuel', 'Conge Exceptionnel', 'Conge Recuperation'] );
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
        Schema::dropIfExists('nature__conges');
    }
};
