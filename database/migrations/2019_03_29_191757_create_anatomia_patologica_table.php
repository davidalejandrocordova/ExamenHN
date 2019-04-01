<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnatomiaPatologicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anatomia_patologica', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('n_biopsia')->index()->unique();
            $table->integer('rut_paciente')->nullable();
            $table->string('servicio');
            $table->string('diagnostico_clinico',1000);
            $table->string('antecedentes_clinicos',1000);
            $table->string('medico_solicitante');
            $table->String('examen_macro',1000);
            $table->string('examen_micro',1000);
            $table->date('fecha_muestra');
            $table->date('fecha_ingreso');
            $table->date('fecha_informe');
            $table->string('notas',1000);
            $table->string('mensaje_interno',1000);
            $table->integer('n_laminas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anatomia_patologica');
    }
}
