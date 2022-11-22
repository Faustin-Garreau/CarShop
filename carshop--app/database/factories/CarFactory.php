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
           "immat"=>fake()->randomLetter(2) . '-' . fake()->randomNumber('###') . '-' . fake()->randomLetter(2),
           "color"=>fake()->colorName(),
           "door_number"=>fake()->numberBetween(2,5),
           "kilometers"=>fake()->numberBetween(5000, 250000),
           "nb_places"=>fake()->numberBetween(2,7),
           "clim"=>fake()->boolean(),
           "oil"=>fake()->name(),
           "categories"=>fake()->name(),
           "image"=>fake()->imageUrl($width = 800, $height = 400),
           "rate"=>fake()->numberBetween(100,3000)
      ];
    }
}
