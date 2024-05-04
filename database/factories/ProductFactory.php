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
            'user_id' => 1,
            'category_id'=>rand(1, 6),
            'nomi' =>fake()->streetName(),
            'narxi' => 100000,
            'tasnifi' =>fake()->paragraph(15),
            'photo' => null,
        ];
    }
}
