<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company, // Generate a fake company name
            'description' => $this->faker->sentence, // Generate a fake description
            'cooperation' => $this->faker->boolean, // Generate a random boolean value
            'list_of_products' => [], // Default empty array
        ];
    }
}
