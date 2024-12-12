<?php

namespace Database\Factories;

use App\Models\StudentClasses;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentClasses>
 */
class StudentClassesFactory extends Factory
{
    protected $model = StudentClasses::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'education_date_id' => $this->faker->numberBetween(1, 10),
            'supervisor_id' => $this->faker->numberBetween(1, 10),
            'room_id' => $this->faker->optional()->numberBetween(1, 10),
                'number' => $this->faker->numberBetween(1, 11),
            'literal' => $this->faker->randomElement(['A', 'B', 'C', 'D', 'E']),
            'is_active' => $this->faker->boolean(90), // 90% вероятность true
            'class_type' => $this->faker->randomElement(['tj', 'ru', 'uz', 'de', 'en']),
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
