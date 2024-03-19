<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Student;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'Quantity' => $this->faker->randomNumber(2),
            'time' => $this->faker->time(),
            'student_id' => Student::all()->random()->id,
            'product_id' => Product::all()->random()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
