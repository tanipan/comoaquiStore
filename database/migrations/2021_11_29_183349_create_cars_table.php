<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();

            $table->string('brand'); //Marca de coche
            $table->string('model'); //Modelo de coche
            $table->string('seats'); //Asientos
            $table->string('doors'); //Numero de puertas
            $table->string('gearBoxType'); //Tipo de cambio
            $table->string('price'); //Precio
            $table->string('color'); //Color del coche

        
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
        Schema::dropIfExists('cars');
    }
}
