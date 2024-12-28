<?php

namespace Database\Factories;

use App\Models\EducationDate;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EducationDate>
 */
class EducationDateFactory extends Factory
{

    protected $model = EducationDate::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'start_year' => $this->faker->year(),
            'end_year' => $this->faker->year(),
            'is_active' => $this->faker->boolean(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
