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
        // Admin user
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@margaritaflores.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
            'is_active' => true,
        ]);

        // Agent user
        User::create([
            'name' => 'Juan Agente',
            'email' => 'agente@margaritaflores.com',
            'password' => Hash::make('password123'),
            'role' => 'agente',
            'is_active' => true,
        ]);

        // Inactive user
        User::create([
            'name' => 'Usuario Inactivo',
            'email' => 'inactivo@margaritaflores.com',
            'password' => Hash::make('password123'),
            'role' => 'agente',
            'is_active' => false,
        ]);
    }
}
