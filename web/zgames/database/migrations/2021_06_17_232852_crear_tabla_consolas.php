<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaConsolas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Modelo orientado a objetos:
        //Base de datos relacional + programacion orientada a objetos
        // MySQL + Eloquent (ORM del modelo de laravel) Object relational mapping
        //Crear clases pa que se cree sola la tabla
        Schema::create('consolas', function (Blueprint $table) {
            $table->id(); //Secuencias, autoincrementales
            //Autoincrementales: Claves unicas generadas automaticamente por el motor
            $table->string("nombre",150);
            $table->string("marca",50);
            $table->integer("anio");
            $table->timestamps(); //dos campos que son el create_at y el updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consolas');
    }
}
