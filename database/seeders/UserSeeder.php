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
        $user = User::create([
            'name' => 'Luis Gabriel',
            // 'apellido' => 'Calloapaza Vilca',
            'email' => 'kidmeg100@hotmail.com',
            // 'dni' => '40135285',
            // 'direccion' => 'Oasis de Villa el Salvador',
            // 'telefono' => '990039886',
            // 'estado_id' => '1',
            'password' => bcrypt('74712308'),
        ]);
        $user->assignRole('Administrador');
    }
}
