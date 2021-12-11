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
                'd_aplicativo' => 'Mi perfil',
                'd_icono'=>'bi bi-person-badge-fill',
                'd_ruta' => 'perfil-usuario',
                'created_at' => date('Y-m-d H:i:s'),

            ]        
        );
        DB::table('aplicativos')->insert(
            [
                'modulo_id' => 2,
                'd_aplicativo' => 'Admón. Deptos',
                'd_icono'=>'bi bi-diagram-2-fill',                
                'd_ruta' => 'deptos-fundacion',
                'created_at' => date('Y-m-d H:i:s'),

            ]        
        );

        DB::table('aplicativos')->insert(
            [
                'modulo_id' => 2,
                'd_aplicativo' => 'Admón. Roles',
                'd_icono'=>'bi bi-people',
                'd_ruta' => 'roles-fundacion',
                'created_at' => date('Y-m-d H:i:s'),

            ]        
        );

        DB::table('aplicativos')->insert(
            [
                'modulo_id' => 2,
                'd_aplicativo' => 'Admón. Módulos',
                'd_icono'=>'bi bi-boxes',
                'd_ruta' => 'modulos',
                'created_at' => date('Y-m-d H:i:s'),

            ]        
        );

        DB::table('aplicativos')->insert(
            [
                'modulo_id' => 2,
                'd_aplicativo' => 'Admón. aplicativos',
                'd_icono'=>'bi bi-app',
                'd_ruta' => 'apps',
                'created_at' => date('Y-m-d H:i:s'),

            ]        
        );
        DB::table('aplicativos')->insert(
            [
                'modulo_id' => 2,
                'd_aplicativo' => 'Permisos por rol',
                'd_icono'=>'bi bi-file-lock2',
                'd_ruta' => 'permisos-rol',
                'created_at' => date('Y-m-d H:i:s'),

            ]        
        );

        DB::table('aplicativos')->insert(
            [
                'modulo_id' => 2,
                'd_aplicativo' => 'Asig. Usuarios',
                'd_icono'=>'bi bi-person-video3',
                'd_ruta' => 'asignar-usuarios',
                'created_at' => date('Y-m-d H:i:s'),

            ]        
        );

       

    }
}
