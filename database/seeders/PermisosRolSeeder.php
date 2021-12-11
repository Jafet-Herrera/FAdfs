<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermisosRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //@INICIO-amin
        DB::table('permisos_rols_aplicativos')->insert(
            [
                'rol_id' => 1,
                'aplicativo_id' => 1
            ]        
        );

        DB::table('permisos_rols_aplicativos')->insert(
            [
                'rol_id' => 1,
                'aplicativo_id' => 2
            ]        
        );

        DB::table('permisos_rols_aplicativos')->insert(
            [
                'rol_id' => 1,
                'aplicativo_id' => 3
            ]        
        );

        DB::table('permisos_rols_aplicativos')->insert(
            [
                'rol_id' => 1,
                'aplicativo_id' => 4
            ]        
        );

        DB::table('permisos_rols_aplicativos')->insert(
            [
                'rol_id' => 1,
                'aplicativo_id' => 5
            ]        
        );

        DB::table('permisos_rols_aplicativos')->insert(
            [
                'rol_id' => 1,
                'aplicativo_id' => 6
            ]        
        );

        DB::table('permisos_rols_aplicativos')->insert(
            [
                'rol_id' => 2,
                'aplicativo_id' => 6
            ]        
        );

         //@FIN-amin
    }
}
