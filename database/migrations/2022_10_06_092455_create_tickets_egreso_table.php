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
        Schema::create('ticketsEgreso', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_ticketsIngreso');
            $table->date('fecha_egreso');
            $table->foreignId('id_tarifa');
            $table->float('total', 8, 2)->default(0);
            $table->timestamps();

            $table->foreign('id_ticketsIngreso')->references('id')->on('ticketsIngreso')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_tarifa')->references('id')->on('tarifas')
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
        Schema::dropIfExists('ticketsEgreso');
    }
};
