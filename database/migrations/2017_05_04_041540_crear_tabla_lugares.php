<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaLugares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lugares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empresa_id');
            $table->text('name');
            $table->text('direccion');
            $table->timestamps();
        });
        /*
        Schema::table('Lugares', function ($table){
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
        });
        // */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lugares');
    }
}
