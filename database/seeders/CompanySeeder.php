<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Aqui usamos el metodo factory() de forma global y por eso debemos importar la clase Factory
 */
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        factory(App\Models\Company::class, 10)->create();
    }
}
