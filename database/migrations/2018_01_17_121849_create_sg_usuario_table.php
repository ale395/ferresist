<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSgUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sg_usuario', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->char('usuario',10);
            $table->char('contrasenha',50);
            $table->integer('id_rol')->unsigned();
            $table->char('estado',1);
            $table->timestamps();

            $table->foreign('id_rol')->references('id_rol')->on('sg_rol');
            
            $table->unique('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sg_usuario');
    }
}
