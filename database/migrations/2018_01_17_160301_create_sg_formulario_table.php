<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSgFormularioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sg_formulario', function (Blueprint $table) {
            $table->increments('id_formulario');
            $table->char('formulario',8);
            $table->string('nombre',50);
            $table->integer('id_modulo')->unsigned();
            $table->char('estado',1);
            $table->timestamps();

            $table->unique('formulario');
            $table->foreign('id_modulo')->references('id_modulo')->on('sg_modulo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sg_formulario');
    }
}
