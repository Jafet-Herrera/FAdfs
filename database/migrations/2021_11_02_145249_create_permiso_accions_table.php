<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisoAccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_accions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perol_id')->references('id')->on('permisos_rols_aplicativos');
            $table->foreignId('accion_id')->references('id')->on('accions');
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
        Schema::dropIfExists('permiso_accions');
    }
}
