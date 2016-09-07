<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Categorias', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nombre');
        $table->timestamps();
        $table->integer('topico_id')->unsigned();
        $table->foreign('topico_id')->references('id')->on('Topicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Categorias');
    }
}
