<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'amount' => fake()->numberBetween(),
            'type' => fake()->randomElement(['income','expense']),
            'description' => fake()->paragraph(),
            'date' =>fake()->date,
            'created_at' => fake()->date('d-m-Y'),
        ];

    }

}
