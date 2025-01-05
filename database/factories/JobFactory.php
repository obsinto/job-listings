<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Employer\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Job\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'salary' => number_format(fake()->numberBetween(50000, 150000) / 100, 2, ',', '.'),
            'employer_id' => Employer::factory(),
        ];
    }
}
