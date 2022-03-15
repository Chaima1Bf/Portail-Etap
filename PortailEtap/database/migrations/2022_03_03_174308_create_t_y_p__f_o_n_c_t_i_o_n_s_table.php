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
        Schema::create('typ__fonctions', function (Blueprint $table) {
            $table->integer('CODE_TYPE')->primary();
            $table->string('LIB_TYPE',100);
            $table->integer('MONTANT');
            $table->string('CODF_CNRPS',4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('typ__fonctions');
    }
};
