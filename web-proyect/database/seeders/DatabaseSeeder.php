<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear un usuario por defecto con una contraseña específica
        User::factory()->create([
            'email' => 'arteaga17000@gmail.com',
            'password' => Hash::make('contraseñaSegura123')
        ]);

        // Crear 19 usuarios adicionales con 4 posts cada uno
        User::factory(19)->hasPosts(4)->create();
        User::factory(19)->hasPosts(4)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
    }
}
