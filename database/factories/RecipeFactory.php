<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title' => fake()->text(10),
            'duration' => fake()->numberBetween(1, 360),
            'image' => null,
            'description' => fake()->text(200),
            'ingredients' => fake()->text(200),
            'methods' => fake()->text(200),
            'user_id' => fake()->numberBetween(1, 3),
        ];
    }
}
