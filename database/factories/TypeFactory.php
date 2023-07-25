<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Type>
 */
class TypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => fake()->unique()->randomElement([
                'Edilizio',
                'Information Technology (IT)',
                'Ricerca & Sviluppo (R&S)',
                'Progetto interno',
                'Progetto esterno',
                'Sviluppo software',
                'Progetto pubblico',
                'Progetto privato',
                "Digital Arts",
                "Riqualificazione ambientale"
            ]),
            "description" => fake()->paragraph()
        ];
    }
}
