<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAfiliacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliacion', function (Blueprint $table) {
            $table->bigIncrements('id_afiliacion');
            $table->date('fecha_afiliacion');
            $table->date('fecha_vencimiento');
            $table->date('fecha_renovacion');
            $table->string('obs_afiliacion',250);
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
        Schema::dropIfExists('afiliacion');
    }
}
