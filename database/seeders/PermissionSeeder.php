<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $roleSuperAdmin = Role::create(['name' => 'SuperAdmin']);
        $roleAdmin = Role::create(['name' => 'Administrador']);
        $roleTecnico = Role::create(['name' => 'Tecnico']);
        // Crear permiso
        Permission::create(['name' => 'admin.dashboard'])->syncRoles([$roleTecnico, $roleAdmin, $roleSuperAdmin]);
        //////////// MODULE USERS ////////////////////
        Permission::create(['name' => 'admin.users'])->assignRole($roleAdmin, $roleSuperAdmin);
        Permission::create(['name' => 'admin.users.crear'])->assignRole($roleAdmin, $roleSuperAdmin);
        Permission::create(['name' => 'admin.users.editar'])->assignRole($roleAdmin, $roleSuperAdmin);
        Permission::create(['name' => 'admin.users.eliminar'])->assignRole($roleAdmin, $roleSuperAdmin);
        Permission::create(['name' => 'admin.users.habilitar'])->assignRole($roleSuperAdmin);
        ////////////////////////////////

        Permission::create(['name' => 'admin.resources'])->syncRoles([$roleTecnico, $roleAdmin, $roleSuperAdmin]);
        Permission::create(['name' => 'admin.profile'])->syncRoles([$roleTecnico, $roleAdmin, $roleSuperAdmin]);
    }
}
