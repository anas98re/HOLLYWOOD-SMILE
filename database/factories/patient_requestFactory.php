<?php

namespace Database\Factories;

use App\Models\disease;
use App\Models\patient;
use App\Models\patient_request;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\patient_request>
 */
class patient_requestFactory extends Factory
{
    protected $model = patient_request::class;

    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['consultation', 'request']),
            'is_done' => 0,
            'disease_name_id'=>disease::all()->random()->id,
            'description' => null,
            'title' => $this->faker->sentence,
            'phoneNumber' => $this->faker->phoneNumber,
            'patient_id'=>patient::all()->random()->id,
        ];
    }
}
