<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tipo' => fake()->word(),
            'cantidad' => fake()->randomFloat(2, 50, 1000),
            'descripcion' => fake()->sentence(3),
            'gastos_fecha' => fake()->dateTimeBetween('-1 week', '+1 week'),
        ];
    }
}
