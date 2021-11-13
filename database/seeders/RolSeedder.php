<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert(
            [
                'area_id' => 1,
                'd_rol' => 'Admin'

            ]        
        );

        DB::table('rols')->insert(
            
            [
                'area_id' => 2,
                'd_rol' => 'Developer Web'
            ]
        );
    }
}
