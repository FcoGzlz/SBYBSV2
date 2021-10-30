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
            'nombre' => 'Super',
            'apellido' => 'Admin 1',
            'email' => 'super@admin1.com',
            'password' => bcrypt('Admin1Pass')
        ]);

        $superAdmin1->assignRole('superAdmin');

        $superAdmin2 = User::create([
            'nombre' => 'Super',
            'apellido' => 'Admin 2',
            'email' => 'super@admin2.com',
            'password' => bcrypt('Admin2Pass')
        ]);

        $superAdmin2->assignRole('superAdmin');

        $UAdministrador = User::create([
            'nombre' => 'Usuario',
            'apellido' => 'Administrador',
            'email' => 'usuario@administrador.com',
            'password' => bcrypt('AdministradorPass')
        ]);

        $UAdministrador->assignRole('UAdministrador');

        $UOperativo = User::create([
            'nombre' => 'Usuario',
            'apellido' => 'Operativo',
            'email' => 'usuario@operativo.com',
            'password' => bcrypt('OperativoPass')
        ]);

        $UOperativo->assignRole('UOperativo');

    }
}
