<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "gearbox"=>fake()->randomElement(['manuelle', 'automatique']),
            "immat"=>fake()->randomLetter(2) . '-' . fake()->randomNumber(3) . '-' . fake()->randomLetter(2),
            "color"=>fake()->colorName(),
            "door"=>fake()->numberBetween(2,5),

        ];
    }
}
