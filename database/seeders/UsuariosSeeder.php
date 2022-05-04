<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin1 = User::create([
            'nombre' => 'admin',
            'password' => bcrypt('adminbyb2019')
        ]);

        $superAdmin1->assignRole('superAdmin');

        $superAdmin2 = User::create([
            'nombre' => 'Jefatura',
            'password' => bcrypt('byb2019,.')
        ]);

        $superAdmin2->assignRole('jefatura');

        $UAdministrador = User::create([
            'nombre' => 'Monitoreo',
            'password' => bcrypt('byb2022.,')
        ]);

        $UAdministrador->assignRole('monitoreo');

    }
}
