<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

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
        return [
            'title' => fake()->sentence(),
            'slug' => fn ($attributes): string => str($attributes['title'])->slug(),
            'body' => File::get(resource_path('markdown/benchmark.md')),
            'excerpt' => fake()->paragraph(),
            'active' => rand(0, 1),
        ];
    }
}
