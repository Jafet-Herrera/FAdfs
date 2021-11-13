<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accions')->insert(
            
            [
                'd_accion' => 'Todos'
            ]
        );

        DB::table('accions')->insert(
            
            [
                'd_accion' => 'Ninguno'
            ]
        );
       
        DB::table('accions')->insert(
            
            [
                'd_accion' => 'Crear'
            ]
        );
        DB::table('accions')->insert(
            
            [
                'd_accion' => 'Editar'
            ]
        );
        DB::table('accions')->insert(
            
            [
                'd_accion' => 'Eliminar'
            ]
        );
        DB::table('accions')->insert(
            
            [
                'd_accion' => 'Descargar'
            ]
        );
        DB::table('accions')->insert(
            
            [
                'd_accion' => 'Cargar'
            ]
        );
        
    }
}
