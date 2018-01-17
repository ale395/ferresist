<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSgRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sg_rol', function (Blueprint $table) {
            $table->increments('id_rol');
            $table->char('rol',8);
            $table->string('nombre',50);
            $table->char('estado',1);
            $table->timestamps();

            
            $table->unique('rol');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sg_rol');
    }
}
