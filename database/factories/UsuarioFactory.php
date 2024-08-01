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
            'imagen' => 'https://as1.ftcdn.net/v2/jpg/01/43/05/72/1000_F_143057292_0ny2vInfgFPaay7wWhzaMEWfbEHgfj4W.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
