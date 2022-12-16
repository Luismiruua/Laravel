<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();//Interger Unsigned Increment
            $table->string('nombre', 32);//Varchar
            $table->string('telefono', 16)->nullable();
            $table->integer('edad');
            $table->string('password', 64);
            $table->string('email', 64)->unique();
            $table->string('sexo');
            $table->rememberToken();
            $table->timestamps(); //Se crea la fecha en la que se inició el registro
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
};
