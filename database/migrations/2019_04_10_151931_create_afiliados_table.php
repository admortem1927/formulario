<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAfiliadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliados', function (Blueprint $table) {
            $table->bigIncrements('id_afiliado');
            $table->unsignedBigInteger('id_afiliacion');
            $table->unsignedBigInteger('id_persona');
            $table->string('tipo_afiliado',12);
            $table->string('obs_afiliado',250);
            $table->timestamps();
            $table->foreign('id_afiliacion')->references('id_afiliacion')->on('afiliacion');
            $table->foreign('id_persona')->references('id_persona')->on('persona');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('afiliados');
    }
}
