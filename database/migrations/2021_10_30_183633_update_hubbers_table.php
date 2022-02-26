<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateHubbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hubers', function (Blueprint $table) {
            $table->integer('works')->nullable();
            $table->integer('workingModality')->nullable();
            $table->integer('typeRoom')->nullable();
            $table->string('floor')->nullable();
            $table->integer('elevator')->nullable();
            $table->integer('knowUs')->nullable();
            $table->string('meters')->nullable();
            $table->text('comments')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
