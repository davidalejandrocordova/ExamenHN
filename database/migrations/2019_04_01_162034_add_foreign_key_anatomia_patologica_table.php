<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyAnatomiaPatologicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('anatomia_patologica', function (Blueprint $table) {
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
        Schema::table('anatomia_patologica', function (Blueprint $table) {
            $table->dropForeign('anatomia_patologica_rut_paciente_foreign');
        });
    }
}
