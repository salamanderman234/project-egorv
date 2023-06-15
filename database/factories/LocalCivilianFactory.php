<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LocalCivilian>
 */
class LocalCivilianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "fullname" => fake()->name(),
            "nik" => fake()->isbn13(),
            "age" => fake()->numberBetween(10, 70),
            "date_of_birth" => fake()->dateTime(),
            "place_of_birth" => fake()->state(),
            "address" => fake()->address(),
        ];
    }
}
