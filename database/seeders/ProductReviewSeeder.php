<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('product_reviews')->insert([
                'user_id'    => rand(1, 5),
                'product_id' => rand(1, 5),
                'score'      => $faker->numberBetween(0, 10),
                'review'     => $faker->sentence(1, 100),
            ]);
        }
    }
}
