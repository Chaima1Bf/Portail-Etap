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
        Schema::create('absences', function (Blueprint $table) {
            $table->integer('ABS_MAT_95')->primary();
            $table->integer('ABS_NUMORD_93');
            $table->integer('ABS_NAT_9');
            $table->integer('ABS_CET_9');
            $table->date('ABS_DATE_DEB');
            $table->enum('ABS_PERDEB_X',['Apres-midi' ,'Matin']);
            $table->date('ABS_DATE_FIN');
            $table->enum('ABS_PERFIN_X',['Apres-midi' ,'Matin']);
            $table->integer('ABS_NBRJOUR_93');
            $table->integer('ABS_CUMULE_9');
            $table->foreign('ABS_NAT_9')->references('CODE_ABS')->on('nat__abs')
                ->onDelete('cascade');
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
        Schema::dropIfExists('absences');
    }
};
