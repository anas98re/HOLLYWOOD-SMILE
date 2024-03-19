<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\store_manager;
use App\Models\StoreManager;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'photo' => $this->faker->imageUrl(),
            'discount_value' => $this->faker->randomFloat(2, 0, 100),
            'Quantity' => $this->faker->randomNumber(2),
            'category' => $this->faker->word,
            'store_manager_id'=>store_manager::all()->random()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
