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
        Schema::create('t_y_p__f_o_n_c_t_i_o_n_s', function (Blueprint $table) {
            $table->integer('CODE_TYPE')->primary();
            $table->string('LIB_TYPE',100);
            $table->integer('MONTANT');
            $table->string('CODF_CNRPS');
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
        Schema::dropIfExists('t_y_p__f_o_n_c_t_i_o_n_s');
    }
};
