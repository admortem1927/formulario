<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguridadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguridad', function (Blueprint $table) {
            $table->bigIncrements('id_seguridad');
            $table->unsignedBigInteger('fk_id_persona');
            $table->unsignedBigInteger('fk_id_entidad');
            $table->foreign('fk_id_persona')->references('id_persona')->on('persona');
            $table->foreign('fk_id_entidad')->references('id_entidad')->on('entidad');
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
        Schema::dropIfExists('seguridad');
    }
}
