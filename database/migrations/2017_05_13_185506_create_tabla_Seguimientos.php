<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablaSeguimientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Seguimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empresa_id');
            $table->integer('lugar_id');
            $table->integer('tipo_reporte_id');
            $table->text('titulo');
            $table->text('descripcion');
            $table->timestamps();    
        });
        /*
        Schema::table('Seguimientos', function ($table){
            $table->foreign('empresa_id')->references('id')->on('empresas');
            $table->foreign('lugar_id')->references('id')->on('lugares');
            $table->foreign('tipo_reporte_id')->references('id')->on('tipo_reporte');
            $table->foreign('usuarios_id')->references('id')->on('users');
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
        Schema::dropIfExists('Seguimientos');
    }
}
