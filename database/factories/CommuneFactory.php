<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commune>
 */
class CommuneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_reg' => $this->faker->numberBetween(1, 15),
            'description' => $this->faker->city,
            'status' => $this->faker->randomElement(['A', 'I', 'Trash']),
        ];
    }
}
