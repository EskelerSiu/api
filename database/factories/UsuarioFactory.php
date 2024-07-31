<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'correo' => $this->faker->unique()->safeEmail,
            'contra' => 'changeme', // contraseña encriptada
            'nombre' => $this->faker->name,
            'rol' => $this->faker->randomElement(['admin', 'empleado']),
            'imagen' => 'https://www.forosperu.net/adjuntos/20181114_014719-png.126535/',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
