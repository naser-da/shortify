<?php

namespace Database\Factories;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Link>
 */
class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => function () {
                return User::factory()->create()->id;
            },
            'origional_link' => fake()->url(),
            'shortened_link' => fake()->regexify('[a-z0-9]{4}'),
            'visits_count' => fake()->numberBetween($min = 1, $max = 1000),
            'is_activated' => fake()->randomElement([0, 1]),
        ];
    }
}
