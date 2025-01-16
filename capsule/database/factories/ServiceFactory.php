<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'description' => $this->faker->paragraph,
            'cooperation' => $this->faker->boolean,
            'list_of_products' => [],
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // Default password for testing
        ];
    }
}
