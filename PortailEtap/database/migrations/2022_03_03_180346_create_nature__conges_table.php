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
        Schema::create('nature_conges', function (Blueprint $table) {
            $table->enum('CODE',[1,2,3]);
            $table->enum('NOM',['Annuel', 'Exceptionnel', 'Recuperation']);
            $table->enum('DESCRIPTION',['Conge Annuel', 'Conge Exceptionnel', 'Conge Recuperation'] );
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
