<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtencionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atencion', function (Blueprint $table) {
            $table->bigIncrements('id_atencion');
            $table->unsignedBigInteger('id_afiliado');
            $table->string('especialidad',50);
            $table->string('descripcion',500);
            $table->timestamps();          
            $table->foreign('id_afiliado')->references('id_afiliado')->on('afiliados');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atencion');
    }
}
