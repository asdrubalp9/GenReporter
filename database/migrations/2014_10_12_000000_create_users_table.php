<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('login');
            $table->string('password');
            $table->string('telefono');
            $table->integer('level')->default('2');
            $table->integer('empresa_id');
            $table->string('foto_url')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        /*
        Schema::table('users', function ($table){
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
        Schema::dropIfExists('users');
    }
}

