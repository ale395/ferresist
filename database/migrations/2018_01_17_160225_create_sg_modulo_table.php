<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSgModuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sg_modulo', function (Blueprint $table) {
            $table->increments('id_modulo');
            $table->char('modulo',8);
            $table->string('nombre',50);
            $table->char('estado',1);
            $table->timestamps();

            $table->unique('modulo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sg_modulo');
    }
}
