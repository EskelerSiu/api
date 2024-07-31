<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word,
            'descripcion' => $this->faker->sentence,
            'categoria' => $this->faker->randomElement(['Res', 'Cerdo', 'Pollo', 'Cordero', 'Pescado']),
            'precio' => $this->faker->randomFloat(2, 50, 500), 
            'proveedor' => $this->faker->company,
            'imagen' => 'https://static.vecteezy.com/system/resources/previews/024/096/081/non_2x/beef-brisket-butchery-product-free-png.png', 
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
