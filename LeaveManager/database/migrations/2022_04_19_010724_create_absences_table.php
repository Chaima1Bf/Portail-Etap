<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences', function (Blueprint $table) {
            $table->id();
            $table->integer('ABS_MAT_95');
            $table->integer('PERS_MAT_95');
            $table->integer('ABS_NUMORD_93');
            $table->integer('ABS_NAT_9');
            $table->integer('ABS_CET_9');
            $table->date('ABS_DATE_DEB');
            $table->enum('ABS_PERDEB_X',['Apres-midi' ,'Matin']);
            $table->date('ABS_DATE_FIN');
            $table->enum('ABS_PERFIN_X',['Apres-midi' ,'Matin']);
            $table->integer('ABS_NBRJOUR_93');
            $table->integer('ABS_CUMULE_9');
            $table->foreignId('nature_id')->constrained('nat_abs')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')
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
}
