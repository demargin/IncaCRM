<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

// Agregamos la importación del modelo User
use App\Models\User; 

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->truncate();
        
        // Crear usuario administrador (admin)
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Crear usuario no administrador (user)
        DB::table('users')->insert([
            'name' => 'Usuario',
            'email' => 'user@user.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);
         

        /**
         * Aqui se usa el metodo factory() de forma estática en un modelo, 
         * Laravel automáticamente importa la clase Factory en el namespace del modelo.
         * User se encuentra en el namespace App\Models. Por lo tanto, Laravel importa 
         * la clase Factory en el namespace App\Models cuando utiliza el método factory() 
         * de forma estática en el modelo User.
         */
        // Crear 20 usuarios adicionales
         User::factory()->count(20)->create();
        
    }
}
