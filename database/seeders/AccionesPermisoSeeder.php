<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccionesPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // @Inicio-permisoAdmón. Deptos
        DB::table('permiso_accions')->insert(
            [
                'perol_id' => 1,
                'accion_id' => 3
            ]        
        );

        DB::table('permiso_accions')->insert(
            [
                'perol_id' => 1,
                'accion_id' => 4
            ]        
        );

        DB::table('permiso_accions')->insert(
            [
                'perol_id' => 1,
                'accion_id' => 6
            ]        
        );

        // @Fin-permisoAdmón. Deptos
    }
}
