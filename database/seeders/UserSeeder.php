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

        User::updateOrCreate(
            ['email' => 'maggyflog85@gmail.com'],
            [
                'name'      => 'Margarita Flores',
                'password'  => Hash::make('password123'),
                'role'      => 'agente',
                'is_active' => true,
            ]
        );
    }
}
