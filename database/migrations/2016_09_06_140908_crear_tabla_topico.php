<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTopico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Topicos', function (Blueprint $table) {
        $table->increments('id');
        $table->string('titulo');
        $table->string('imagen');
        $table->string('descripcion');
        $table->string('acciones');
        $table->string('tags');
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
        Schema::drop('Topicos');
    }
}
