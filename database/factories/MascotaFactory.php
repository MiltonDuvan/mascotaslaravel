<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mascota>
 */
class MascotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
            return([
                     'nombre_mascota' => $this->faker->userName(),
                    'raza_mascota' => $this->faker->userName(),
                   'categoria_mascota'=> $this->faker->userName(),
                     'genero_mascota' => $this->faker->userName(),
        ]);
    }
}
