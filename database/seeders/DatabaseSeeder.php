<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Store;
use App\Models\Product;
use App\Models\Product_review;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductReviewSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory(5)->create();

        Store::factory(5)->create();

        Product::factory(5)->create();

        $this->call(ProductReviewSeeder::class);
    }
}
