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
        Permission::create(['name' => 'crear cliente']);
        Permission::create(['name' => 'editar cliente']);
        Permission::create(['name' => 'leer cliente']);
        Permission::create(['name' => 'eliminar cliente']);

        // Permisos asociados a roles
        Permission::create(['name' => 'crear reporte']);
        Permission::create(['name' => 'editar reporte']);
        Permission::create(['name' => 'leer reporte']);
        Permission::create(['name' => 'eliminar reporte']);

        // Permisos asociados permisos
        Permission::create(['name' => 'crear permiso']);
        Permission::create(['name' => 'editar permiso']);
        Permission::create(['name' => 'leer permiso']);
        Permission::create(['name' => 'eliminar permiso']);



        //Roles
        $role = Role::create(['name' => 'superAdmin']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'jefatura'])
            ->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'monitoreo'])
            ->givePermissionTo(Permission::all());
    }
}
