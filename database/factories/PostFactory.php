<?php

namespace Database\Factories;

// use App\Models\Post;
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
    public function definition()
    {
        return [
            'kepuasan' => $this->faker->randomElement(['1','2','3','4','5']),
            'kebersihan' => $this->faker->randomElement(['1','2','3','4','5']),
            'pesan' => $this->faker->sentence(mt_rand(5,15)),
            'published_at' => now(),
            'user_id' => mt_rand(1,3)
        ];
    }
}
