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
            'estado' => '1',
            'password' => bcrypt('74712308'),
        ]);
        $userAdministradord = User::create([
            'nombre' => 'Gabriel',
            'apellido' => 'Calloapaza Torres',
            'email' => 'kidmeg200@hotmail.com',
            'dni' => '40135281',
            'direccion' => 'Oasis de Villa el Salvador',
            'telefono' => '990039886',
            'estado' => '1',
            'password' => bcrypt('74712308'),
        ]);
        $userTecnico2 = User::create([
            'nombre' => 'Gabriel',
            'apellido' => 'Calloapaza Torres',
            'email' => 'kidmeg300@hotmail.com',
            'dni' => '40135282',
            'direccion' => 'Oasis de Villa el Salvador',
            'telefono' => '990039886',
            'estado' => '1',
            'password' => bcrypt('74712308'),
        ]);
        $userTecnico3 = User::create([
            'nombre' => 'Gabriel',
            'apellido' => 'Calloapaza Torres',
            'email' => 'kidmeg400@hotmail.com',
            'dni' => '40135283',
            'direccion' => 'Oasis de Villa el Salvador',
            'telefono' => '990039886',
            'estado' => '1',
            'password' => bcrypt('74712308'),
        ]);
        $userTecnico4 = User::create([
            'nombre' => 'Gabriel',
            'apellido' => 'Calloapaza Torres',
            'email' => 'kidmeg500@hotmail.com',
            'dni' => '40135284',
            'direccion' => 'Oasis de Villa el Salvador',
            'telefono' => '990039886',
            'estado' => '1',
            'password' => bcrypt('74712308'),
        ]);
        $userTecnico5 = User::create([
            'nombre' => 'Gabriel',
            'apellido' => 'Calloapaza Torres',
            'email' => 'kidmeg600@hotmail.com',
            'dni' => '40135285',
            'direccion' => 'Oasis de Villa el Salvador',
            'telefono' => '990039886',
            'estado' => '1',
            'password' => bcrypt('74712308'),
        ]);
        $userAdmin->assignRole('SuperAdmin');
        $userAdministradord->assignRole('Administrador');
        $userTecnico2->assignRole('Tecnico');
        $userTecnico3->assignRole('Tecnico');
        $userTecnico4->assignRole('Tecnico');
        $userTecnico5->assignRole('Tecnico');
    }
}
