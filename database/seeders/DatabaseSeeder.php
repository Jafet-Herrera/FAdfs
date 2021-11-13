<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        $this->call(AreaSeeder::class);
        //Seeder Roles
        $this->call(RolSeedder::class);
        
        $this->call(ModuloSeeder::class); 

        $this->call(AplicativosSeeder::class);
        
        $this->call(AccionSeeder::class);
        
        $this->call(UserSeeder::class);





    }
}
