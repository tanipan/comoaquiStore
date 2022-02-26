<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHubersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hubers', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('lastname');
            $table->string('address');
            $table->string('address_extender')->nullable();
            $table->string('town');
            $table->string('province');
            $table->string('cp');
            $table->string('lat');
            $table->string('lon');
            $table->string('email');    //->unique();
            $table->string('phone');
            $table->text('message')->nullable();
            //$table->boolean('autonomous')->default(0);
            //$table->boolean('driving_license')->default(0);
            $table->boolean('unsubscribe_mail')->default(0);
            $table->enum("validate", [0, 1, 2, 3, 4])->default(0);
            $table->text("validate_message")->nullable();
            $table->string('token', 100)->nullable();

            //Documents
            $table->integer('option')->nullable(); //Opción de alta
            $table->string('certified_freelancers')->nullable(); //Certificado alta en el régimen especial de autónomos
            $table->string('nif')->nullable(); //Nif
            //$table->string('nifb')->nullable(); //Nig cara B
            $table->string('criminal_certificate')->nullable(); //Certificado de antecedentes penales emitido por el Ministerio de Justicia
            $table->string('certificate_treasury')->nullable(); //Certificado de estar al corriente con la Hacienda Públic
            $table->string('certificate_social')->nullable(); //Certificado de estar al corriente con la Seguridad Social
            $table->string('driving_license_doc')->nullable(); //Carnet de conducir en vigor
            //$table->string('points_certificate')->nullable(); //Certificado de puntos expedido por la DGT
            $table->string('property_title')->nullable(); //Aportación de algún documento que acredite tu derecho de uso del espacio que vas a utilizar como micro-almacén
            $table->string('photographic_description')->nullable(); //Aportación de algún documento que acredite tu derecho de uso del espacio que vas a utilizar como micro-almacén
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            //$table->string('img4')->nullable();
            //$table->string('img5')->nullable();
            $table->string('disability_certificate')->nullable(); //En caso de presentar alguna minusvalía, aportar documentación acreditativa (adjuntar)


            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hubers');
    }
}
