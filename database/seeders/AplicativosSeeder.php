<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AplicativosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aplicativos')->insert(
            [
                'modulo_id' => 1,
                'd_aplicativo' => 'Admón. Deptos',
                'd_icono'=>'bi bi-diagram-2-fill',
                'created_at' => date('Y-m-d H:i:s'),

            ]        
        );

        DB::table('aplicativos')->insert(
            [
                'modulo_id' => 1,
                'd_aplicativo' => 'Admón. Roles',
                'd_icono'=>'bi bi-people-fill',
                'created_at' => date('Y-m-d H:i:s'),

            ]        
        );

        DB::table('aplicativos')->insert(
            [
                'modulo_id' => 1,
                'd_aplicativo' => 'Admón. Módulos',
                'd_icono'=>'bi bi-boxes',
                'created_at' => date('Y-m-d H:i:s'),

            ]        
        );

        DB::table('aplicativos')->insert(
            [
                'modulo_id' => 1,
                'd_aplicativo' => 'Admón. aplicativos',
                'd_icono'=>'bi bi-app',
                'created_at' => date('Y-m-d H:i:s'),

            ]        
        );
        DB::table('aplicativos')->insert(
            [
                'modulo_id' => 1,
                'd_aplicativo' => 'Permisos por rol',
                'd_icono'=>'bi bi-file-lock2',
                'created_at' => date('Y-m-d H:i:s'),

            ]        
        );

        DB::table('aplicativos')->insert(
            [
                'modulo_id' => 1,
                'd_aplicativo' => 'Rol Usuarios',
                'd_icono'=>'bi bi-person-video3',
                'created_at' => date('Y-m-d H:i:s'),

            ]        
        );

    }
}
