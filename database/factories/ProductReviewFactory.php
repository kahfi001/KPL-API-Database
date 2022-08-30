<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product_review>
 */
class ProductReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'store_id' => rand(1, 5),
            'produt_id' => rand(1, 5),
            'score' => $this->faker->numberBetween(1, 10),
            'review' => $this->faker->sentence(100, 150),
        ];
    }
}
