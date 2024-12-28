<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'middle_name' => $this->faker->optional()->firstName,
            'username' => $this->faker->unique()->userName,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => $this->faker->optional()->dateTime,
            'password' => Hash::make('password'),
            'two_factor_secret' => $this->faker->optional()->text,
            'two_factor_recovery_codes' => $this->faker->optional()->text,
            'remember_token' => $this->faker->optional()->sha256,
            'gender' => $this->faker->boolean,
            'phone' => $this->faker->unique()->phoneNumber,
            'birth_date' => $this->faker->date,
            'address' => $this->faker->address,
            'is_active' => $this->faker->boolean(90), // 90% вероятность true
            'is_access' => $this->faker->boolean(90),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
