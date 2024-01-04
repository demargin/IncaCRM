<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory as EloquentFactory;



//use Illuminate\Database\Eloquent\Factories\Factory; // ya no es necesario desde la version 8

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        /**
         * truncate() elimina todos los datos de la tabla, 
         * delete() solo elimina los registros, pero mantiene la estructura de la tabla.
         */
        
         //\DB::table('companies')->truncate();
         \DB::table('companies')->delete();
        Company::factory()->count(10)->create();
    
        
    }
}