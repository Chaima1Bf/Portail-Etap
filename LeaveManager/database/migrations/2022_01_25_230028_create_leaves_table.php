<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeavesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['Annuel','Exceptionnel','Recuperation'])->default('Annuel');
            $table->string('address')->nullable();
            $table->date('start_date');
            $table->enum('perdeb', ['Matin', 'Aprés-Midi']);
            $table->date('end_date');
            $table->enum('perfin', ['Matin', 'Aprés-Midi']);
            $table->string('reason');
            $table->enum('status', ['Traitement']);
            $table->string('emergency_phone')->nullable();
            $table->string('emergency_email')->nullable();
            $table->string('pdf')->nullable();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('leaves');
    }
}
