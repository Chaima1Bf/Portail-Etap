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
            $table->enum('type', ['Annuel','Exceptionnel','Recuperation']);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('reason');
            $table->enum('status', ['Traitement', 'Acceptée', 'Refusée'])->default('Traitement');
            $table->string('emergency_phone')->nullable();
            $table->string('emergency_email')->nullable();
            $table->foreignId('user_id')->constrained();
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
