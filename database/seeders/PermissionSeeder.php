<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        // Crear permiso
        $permission = Permission::create(['name' => 'admin.dashboard']);

        // Crear rol
        $role = Role::create(['name' => 'Administrador']);

        // Asignar permisos al rol
        $role->givePermissionTo($permission);

        
    }
}
