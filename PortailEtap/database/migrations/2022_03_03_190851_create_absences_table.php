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
            $table->string('ABS_PERDEB_X',1);
            $table->date('ABS_DATE_FIN');
            $table->string('ABS_PERFIN_X',1);
            $table->integer('ABS_NBRJOUR_93');
            $table->integer('ABS_CUMULE_9');
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
