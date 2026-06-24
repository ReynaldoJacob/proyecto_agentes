<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'admin@margaritaflores.mx'],
            [
                'name'      => 'Admin Principal',
                'password'  => Hash::make('admin1234'),
                'role'      => 'admin',
                'is_active' => true,
            ]
        );

        // Agentes
        $agentes = [
            ['name' => 'Margarita Flores',  'email' => 'margarita@margaritaflores.mx'],
            ['name' => 'Carlos Mendoza',    'email' => 'carlos@margaritaflores.mx'],
            ['name' => 'Ana Ramírez',       'email' => 'ana@margaritaflores.mx'],
        ];

        foreach ($agentes as $agente) {
            User::updateOrCreate(
                ['email' => $agente['email']],
                [
                    'name'      => $agente['name'],
                    'password'  => Hash::make('password123'),
                    'role'      => 'agente',
                    'is_active' => true,
                ]
            );
        }
    }
}
