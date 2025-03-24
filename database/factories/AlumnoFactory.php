<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Alumno;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name, // Genera un nombre aleatorio
            'correo' => $this->faker->unique()->safeEmail, // Genera un correo único
            'fecha_nacimiento' => $this->faker->date(), // Genera una fecha aleatoria
            'ciudad' => $this->faker->city, // Genera una ciudad aleatoria
        ];
    }
}
