<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userAdmin = User::create([
            'nombre' => 'Luis Gabriel',
            'apellido' => 'Coaquira Calloapaza',
            'email' => 'kidmeg100@hotmail.com',
            'dni' => '74712308',
            'direccion' => 'Oasis de Villa el Salvador',
            'telefono' => '990039886',
            'estado_id' => '1',
            'password' => bcrypt('74712308'),
        ]);
        $userTecnico = User::create([
            'nombre' => 'Gabriel',
            'apellido' => 'Calloapaza Torres',
            'email' => 'kidmeg200@hotmail.com',
            'dni' => '40135285',
            'direccion' => 'Oasis de Villa el Salvador',
            'telefono' => '990039886',
            'estado_id' => '1',
            'password' => bcrypt('74712308'),
        ]);
        $userAdmin->assignRole('Administrador');
        $userTecnico->assignRole('Tecnico');
    }
}
