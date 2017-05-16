<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLugaresUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lugares_Usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lugar_id');
            $table->integer('user_id');
            $table->integer('activo')->default('1');
            $table->timestamps();
            
        });
        /*
        Schema::table('Lugares_Usuarios', function ($table){
            $table->foreign('lugar_id')->references('id')->on('lugares');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
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
        Schema::dropIfExists('Lugares_Usuarios');
    }
}
