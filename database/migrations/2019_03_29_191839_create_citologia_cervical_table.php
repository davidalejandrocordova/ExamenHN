<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitologiaCervicalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citologia_cervical', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('n_pap')->index()->unique();
            $table->integer('rut_paciente')->nullable();
            $table->string('diagnostico',1000);
            $table->string('indicacion',1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citologia_cervical');
    }
}
