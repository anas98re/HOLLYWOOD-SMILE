<?php

namespace Database\Factories;

use App\Models\student;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class StudentFactory extends Factory
{
    protected $model = student::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'available' => $this->faker->boolean,
            'user_id' => function () {
                return User::factory()->create()->id;
            },
            'type' => $this->faker->randomElement(['Bachelor_Degree', 'Master_Degree']),
            'year' => $this->faker->randomElement(['first', 'second', 'third', 'fourth', 'fifth']),
            'Semester' => $this->faker->randomElement(['first', 'second']),
            'specializations' => $this->faker->randomElement(['جراحة', 'طب أسنان الأطفال', 'أمراض الفم', 'تقويم', 'لثة', 'تعويضات المتحركة', 'تعويضات الثابتة', 'تجميل', 'لبية']),
            'university_card' => $this->faker->optional()->sentence,
            'numberOfConsultations' => 0,
            'description' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
