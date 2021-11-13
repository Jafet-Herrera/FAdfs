<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisosRolsAplicativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos_rols_aplicativos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rol_id')->references('id')->on('rols');
            $table->foreignId('aplicativo_id')->references('id')->on('aplicativos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisos_rols_aplicativos');
    }
}
