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
        Schema::create('conges', function (Blueprint $table) {
            $table->integer('CONG_MAT_95')->primary();
            $table->integer('CONG_NUMORD_93');
            $table->integer('CONG_NAT_9');
            $table->string('CONG_MOTIF_X40',40);
            $table->integer('CONG_CET_9');
            $table->integer('CONG_ANCSOLD_93');
            $table->integer('CONG_NBRJOUR_93');
            $table->integer('CONG_NOVSOLD_93');
            $table->date('CONG_DATE_DEB');
            $table->string('CONG_PERDEB_X',1);
            $table->date('CONG_DATE_FIN');
            $table->string('CONG_PERFIN_X',1);
            $table->string('CONG_INTERIM_X20',20);
            $table->string('CONG_ADRES_X30',65);
            $table->string('CONG_TEL_98',8);
            $table->string('CONG_DEMI_PER',8);
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
        Schema::dropIfExists('conges');
    }
};
