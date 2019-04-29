<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('id_persona');
            $table->string('tipo_documento',2);
            $table->string('numero_documento',20);
            $table->string('tipo_afiliado',12);
            $table->string('primer_nombre',20);
            $table->string('segundo_nombre',20);
            $table->string('primer_apellido',20);
            $table->string('segundo_apellido',20);
            $table->string('sexo',10);
            $table->date('fecha_nacimiento');
            $table->string('lugar_nacimiento',30);
            $table->string('tel_contacto',20);
            $table->string('direccion',100);
            $table->string('email',30);
            $table->unsignedBigInteger('id_entidad');       
            $table->timestamps();

            $table->foreign('id_entidad')->references('id_entidad')->on('entidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
}
