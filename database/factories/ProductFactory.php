<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

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
            'product_name' => $this->faker->word(),
            'product_description' => $this->faker->sentence(),
            'product_price' => $this->faker->randomFloat(2, 1, 1000),
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}