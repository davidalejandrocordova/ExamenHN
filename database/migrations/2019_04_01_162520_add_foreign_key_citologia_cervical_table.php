<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyCitologiaCervicalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('citologia_cervical', function (Blueprint $table) {
            $table->foreign('rut_paciente')->references('rut')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('citologia_cervical', function (Blueprint $table) {
            $table->dropForeign('citologia_cervical_rut_paciente_foreign');
        });
    }
}
