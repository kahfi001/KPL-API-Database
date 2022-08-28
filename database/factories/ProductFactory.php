<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'price' => $this->faker->numberBetween(1000, 10000),
            'description' => $this->faker->sentence(mt_rand(5, 10)),
            'photo' => $this->faker->imageUrl(640, 480, 'animals', true),
            'store_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
