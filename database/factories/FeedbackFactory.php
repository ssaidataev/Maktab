<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Feedback;

class FeedbackFactory extends Factory
{
    protected $model = Feedback::class;
    protected  $table = 'feedbacks';

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name(),
            'text' => $this->faker->realText(200),
            'photo' => $this->faker->imageUrl(45, 45, 'people'),
            'is_active' => $this->faker->boolean(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
