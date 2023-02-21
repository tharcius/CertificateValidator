<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Certificate>
 */
class CertificateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'certificate_code' => Str::password(10),
            'conclusion_date' => fake()->dateTimeBetween('-3 years', '-1 week'),
            'viewed' => random_int(1, 10),
            'course_id' => random_int(1, 20),
            'school_id' => random_int(1, 3),
            'student_id' => Student::factory(),
        ];
    }
}
