<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'transaction_title' => fake()->sentence(3),
            'description' => fake()->paragraph(2),
            'status' => fake()->randomElement(['successful', 'declined']),
            'total_amount' => fake()->numberBetween(1, 10000),
            'transaction_number' => fake()->unique()->randomNumber(8, true),
            'created_at' => fake()->dateTimeThisYear(),
            'updated_at' => fake()->dateTimeThisYear()
        ];
    }
}
