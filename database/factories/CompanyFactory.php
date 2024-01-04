<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    protected $model = Company::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
            //'logo' => $this->faker->imageUrl(255, 255),
            'logo' => 'storage/app/public/logos/logo.jpg',
            'website' => $this->faker->domainName(),
        ];
    }
}
