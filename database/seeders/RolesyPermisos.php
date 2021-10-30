<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesyPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Permisos asociados a usuarios
        Permission::create(['name' => 'crear usuario']);
        Permission::create(['name' => 'editar usuario']);
        Permission::create(['name' => 'leer usuario']);
        Permission::create(['name' => 'eliminar usuario']);

        // Permisos asociados a roles
        Permission::create(['name' => 'crear rol']);
        Permission::create(['name' => 'editar rol']);
        Permission::create(['name' => 'leer rol']);
        Permission::create(['name' => 'eliminar rol']);

        // Permisos asociados permisos
        Permission::create(['name' => 'crear permiso']);
        Permission::create(['name' => 'editar permiso']);
        Permission::create(['name' => 'leer permiso']);
        Permission::create(['name' => 'eliminar permiso']);

        //Permisos asociados a solicitudes
        Permission::create(['name' => 'crear solicitud']);
        Permission::create(['name' => 'editar solicitud']);
        Permission::create(['name' => 'leer solicitud']);
        Permission::create(['name' => 'eliminar solicitud']);
        Permission::create(['name' => 'cerrar solicitud']);


        //Permisos asociado al detalle de las solicitudes
        Permission::create(['name' => 'crear detalle']);
        Permission::create(['name' => 'editar detalle']);
        Permission::create(['name' => 'leer detalle']);
        Permission::create(['name' => 'eliminar detalle']);
        Permission::create(['name' => 'cambiar estado solicitud']);


        //Roles
        $role = Role::create(['name' => 'superAdmin']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'UAdministrador'])
            ->givePermissionTo(['crear solicitud', 'editar solicitud', 'leer solicitud', 'eliminar solicitud', 'cerrar solicitud', 'leer detalle']);

        $role = Role::create(['name' => 'UOperativo'])
            ->givePermissionTo(['leer solicitud', 'crear detalle', 'editar detalle', 'leer detalle', 'eliminar detalle', 'cambiar estado solicitud']);
    }
}
