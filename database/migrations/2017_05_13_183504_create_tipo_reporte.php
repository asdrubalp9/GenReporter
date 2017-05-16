<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoReporte extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tipo_Reporte', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empresa_id');
            $table->text('titulo');
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });
        /*
        Schema::table('Tipo_Reporte', function ($table){
            $table->foreign('empresa_id')->references('id')->on('empresas');
        });
        */
    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tipo_Reporte');
    }
}
