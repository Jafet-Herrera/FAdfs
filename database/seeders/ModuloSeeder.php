<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modulos')->insert(
            [
                'd_modulo' => 'Usuarios',
                'd_icono'=>'bi bi-people-fill',
                'created_at' => date('Y-m-d H:i:s'),

            ]        
        );
        DB::table('modulos')->insert(
            [
                'd_modulo' => 'Config. Sistema',
                'd_icono'=>'bi bi-pc-display',
                'created_at' => date('Y-m-d H:i:s'),

            ]        
        );
    }
}
