<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'code' => $this->faker->regexify('[A-Z0-9]{12}'), // Random product code like "123ABC"
            'verification_date' => null,
            'warranty' => null,
            'type' => $this->faker->numberBetween(1, 6),
            'country' => $this->faker->randomElement(['AZ', 'US', 'EU']),
            'service_id' => null,
        ];
    }
}
