<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class teacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
    "name"=> $this->faker->name(),
    "LastName"=> $this->faker->lastName(),
    'Gender' => fake()->randomElement(['m', 'f']),
    "age"=> $this->faker->numberBetween(16,70),
        ];
    }
}
