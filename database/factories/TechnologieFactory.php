<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Technologie>
 */
class TechnologieFactory extends Factory
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
                'Tecnologia automobilistica',
                'Tecnologia alimentare',
                'Biotecnologie',
                'Nanotecnologia',
                'Sistema di tracciamento',
                'Ibridazione tecnologica',
                'Tecnologie di rete',
                'Tecnologia delle costruzioni',
                "Tecnologia energetica",
                "Tecnologia medica"
            ]),
            "description" => fake()->paragraph()
        ];
    }
}
