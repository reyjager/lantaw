<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'post_id' => $this->faker->unique()->numberBetween(10000, 99999),  // Ensure a unique 5-digit ID
            'user_id' => \App\Models\User::factory(), // Assuming you have a User factory
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
        ];
    }
}
