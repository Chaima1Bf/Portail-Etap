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
        Schema::create('cconges', function (Blueprint $table) {
            $table->integer('CCONG_MAT_95')->primary();
            $table->integer('CCONG_NAT_9');
            $table->integer('CCONG_CET_9');
            $table->integer('CCONG_DROIT_93');
            $table->date('CCONG_DATE_MAJ');
            $table->date('INSERT_DATE');
            $table->string('INSERT_USER',35);
            $table->date('UPDATE_DATE');
            $table->string('UPDATE_USER',35);
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
        Schema::dropIfExists('cconges');
    }
};
