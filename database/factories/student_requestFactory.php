<?php

namespace Database\Factories;

use App\Models\disease;
use App\Models\student;
use App\Models\student_request;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student_request>
 */
class student_requestFactory extends Factory
{
    protected $model = student_request::class;

    public function definition()
    {
        $diseaseId = \App\Models\Disease::pluck('id')->random();

        $disease = \App\Models\Disease::find($diseaseId);
        $number = $disease->number ?? null;
        return [
            // 'title' => $this->faker->sentence,
            'is_done' => 0,
            'priority' => $this->faker->randomElement(['hight', 'medium', 'low']),
            'subject' => $this->faker->optional()->word,
            'number' => $number,
            'disease_name_id'=>$diseaseId,
            'student_id'=>student::all()->random()->id,
        ];
    }
}
