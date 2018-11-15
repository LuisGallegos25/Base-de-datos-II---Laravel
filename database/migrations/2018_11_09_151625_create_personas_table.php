<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombrecompleto');
            $table->date('fechaN');
            $table->string('sexo');
            $table->unsignedInteger('ci');
            $table->unsignedInteger('telefono');
            $table->string('colordeojos');
            $table->string('tipoS');
            $table->unsignedInteger('estatura');
            $table->unsignedInteger('peso');

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
        Schema::dropIfExists('personas');
    }
}
