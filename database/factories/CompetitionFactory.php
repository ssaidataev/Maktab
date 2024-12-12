<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Competition;

class CompetitionFactory extends Factory
{
    protected $model = Competition::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'competition_type_id' => \App\Models\CompetitionType::factory(),
            'name' => $this->faker->word(),
            'logo' => $this->faker->imageUrl(),
            'description' => $this->faker->sentence(),
            'document' => $this->faker->text(),
            'is_active' => $this->faker->boolean(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
