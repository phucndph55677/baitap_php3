<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesion>
 */
class LesionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_id' => fake()->rand(1, 4),
            'title' => fake()->text(30),
            'content' => fake()->text(30),
            'image' => fake()->imageUrl(),
        ];
    }
}
