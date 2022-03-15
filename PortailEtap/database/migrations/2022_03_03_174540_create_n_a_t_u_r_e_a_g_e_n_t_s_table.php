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
        Schema::create('nature_agents', function (Blueprint $table) {
            $table->integer('NATAG_CODE_93')->primary();
            $table->string('NATAG_LIB_X50',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('n_a_t_u_r_e_a_g_e_n_t_s');
    }
};
