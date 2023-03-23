<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'kategori_id' => rand(1,10),
            'image' => $this->faker->imageUrl,
            'content' => $this->faker->paragraph,
            'url_yt' => $this->faker->url,
            'type' => $this->faker->randomElement(['main', 'informasi', 'pertanian','youtube']),
        ];
    }
}
