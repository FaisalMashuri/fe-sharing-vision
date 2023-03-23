<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = ["Publish", "Draft", "Trash"];
        return [
            'title' => fake()->name,
            'content' => fake()->text(),
            'category' => fake()->word,
            'status' => $status[rand(0, 2)]
        ];
    }
}
