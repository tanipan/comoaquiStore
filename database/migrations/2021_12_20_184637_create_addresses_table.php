<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('addresses', function (Blueprint $table) {
        //     $table->id();

        //     $table->string('address');
        //     $table->string('province');
        //     $table->string('city');
        //     $table->string('alias');
        //     $table->string('principal');
        //     $table->string('observations');

        //     $table->unsignedBigInteger('client_id');
        //     $table->foreign('client_id')->references('id')->on('customers');
        //     // $table->unsignedBigInteger('order_id');
        //     // $table->foreign('order_id')->references('id')->on('orders');
           
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
