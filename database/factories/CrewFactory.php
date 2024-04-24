<?php

namespace Database\Factories;

use App\Enums\CrewRole;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Crew>
 */
class CrewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roles = CrewRole::all();

        return [
            'name' => fake()->name(),
            'role' => $roles[array_rand($roles)],
        ];
    }
}
