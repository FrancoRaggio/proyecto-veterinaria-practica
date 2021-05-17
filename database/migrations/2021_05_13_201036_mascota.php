<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mascota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascota',function(Blueprint $table){
            $table->id();
            $table->string("nombre");
            $table->string("especie");
            $table->string("raza");
            $table->string("sexo");
            $table->string("propietario");
            $table->date("fechaNacimiento");
            $table->string("direccion");
            $table->string("telefono");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mascota');
    }
}
