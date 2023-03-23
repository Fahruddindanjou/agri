<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kategori_id' => rand(1,10),
            'user_id' => rand(1,10),
            'name' => $this->faker->name,
            'harga' => $this->faker->numberBetween(500000, 1000000),
            'deskripsi' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl,
            'lokasi' => $this->faker->address,
            'rating' => rand(1,10),
            'terjual' => $this->faker->numberBetween(10,100),
            'url' => $this->faker->url,
            'bestseller' => $this->faker->randomElement(['best', 'normal']),
        ];
    }
}
