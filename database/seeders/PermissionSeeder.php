<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'Administrador']);
        $roleTecnico = Role::create(['name' => 'Tecnico']);
        // Crear permiso
        Permission::create(['name' => 'admin.dashboard'])->syncRoles([$roleTecnico, $roleAdmin]);
        Permission::create(['name' => 'admin.users'])->assignRole($roleAdmin);
        Permission::create(['name' => 'admin.resources'])->syncRoles([$roleTecnico, $roleAdmin]);
    }
}
