<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSgAccesoRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sg_acceso_rol', function (Blueprint $table) {
            $table->integer('id_rol')->unsigned();
            $table->integer('id_formulario')->unsigned();
            $table->char('indi_consultar',1);
            $table->char('indi_insertar',1);
            $table->char('indi_actualizar',1);
            $table->char('indi_eliminar',1);
            $table->timestamps();

            $table->primary(['id_rol', 'id_formulario']);
            $table->foreign('id_rol')->references('id_rol')->on('sg_rol');
            $table->foreign('id_formulario')->references('id_formulario')->on('sg_formulario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sg_acceso_rol');
    }
}
