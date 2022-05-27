<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignatairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signataires', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('pers_id')->unsigned()->nullable();
            $table->index('pers_id');
            $table->foreign('pers_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

            $table->BigInteger('signataire_id')->unsigned()->nullable();
            $table->index('signataire_id');
            $table->foreign('signataire_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('orderr')->nullable();
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
        Schema::dropIfExists('signataires');
    }
}
