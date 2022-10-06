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
        Schema::create('ticketsIngreso', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_vehiculo');
            $table->foreignId('id_plaza');
            $table->date('"fecha_ingreso"');
            $table->timestamps();

            $table->foreign('id_vehiculo')->references('id')->on('vehiculos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_plaza')->references('id')->on('plazas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticketsIngreso');
    }
};
