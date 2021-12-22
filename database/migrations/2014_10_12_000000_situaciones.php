<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Situaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Situaciones', function (Blueprint $table) {
            $table->increments('id');

            $table->string('Actor', 250)->nullable();
            $table->string('Imagen')->nullable();
            $table->string('Descripcion', 250)->nullable();
            $table->string('BotonSi', 250)->nullable();
            $table->string('BotonNo', 250)->nullable();

            $table->string('EducacionSi', 250)->nullable();
            $table->string('PoliticaSi', 250)->nullable();
            $table->string('ViolenciaSi', 250)->nullable();
            $table->string('LaboralSi', 250)->nullable();

            $table->string('EducacionNo', 250)->nullable();
            $table->string('PoliticaNo', 250)->nullable();
            $table->string('ViolenciaNo', 250)->nullable();
            $table->string('LaboralNo', 250)->nullable();


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
        Schema::dropIfExists('Situaciones');
    }
}
