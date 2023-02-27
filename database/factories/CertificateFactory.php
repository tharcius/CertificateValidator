<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'certificate_code' => certificateCode(),
            'conclusion_date' => fake()->dateTimeBetween('-3 years', '-1 week'),
            'viewed' => random_int(1, 10),
            'course_id' => random_int(1, 20),
            'school_id' => random_int(1, 2),
            'student_id' => Student::factory(),
        ];
    }
}
