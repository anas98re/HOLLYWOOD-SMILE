<?php

namespace Database\Factories;

use App\Models\patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\patient>
 */
class PatientFactory extends Factory
{
    protected $model = patient::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(1, 100),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'description' => null,
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
        ];
    }
}
