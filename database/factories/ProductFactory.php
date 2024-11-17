<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'product_name' => fake()->randomElement(['BAB Program Shirt', 'IS/ACT Program Shirt', 'BSA/BSAIS Program Shirt', 'BSSW Program Shirt', 'BSEE Program Shirt', 'BSIT Program Shirt', 'BSCS Program Shirt', 'Plain Shirt', 'Alumni Shirt', 'Instructor Shirt']),
        'price' => fake()->numberBetween($min = 100, $max = 10000),
        'quantity' => fake()->numberBetween($min=1, $max=50)
        ];
    }
}
