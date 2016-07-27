<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Recorridos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recorridos', function (Blueprint $table) {
            $table->increments('idRecorridos');
            $table->string('origen',60);
            $table->string('destino', 60);
            $table->integer('Km');
            $table->float('totalRecorrido');
            $table->integer('correo_id')->unsigned();
            $table->foreign('correo_id')->references('idCorreos')->on('correosEnviados')->onDelete('cascade');
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
        Schema::drop('recorridos');
    }
}