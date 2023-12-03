<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        return [
            'role' => 'user',
            'email' => $this->faker->email(),
            'email_verified_at' => now(),
            'password' => bcrypt('12345'),
            'username' => $this->faker->userName(),
            'fullname' => $this->faker->name(),
            'asal_kota' => $this->faker->city(),
            'deskripsi' => $this->faker->paragraph(),
            'photo_profile' => 'User.svg',
            'phone_number' => $this->faker->phoneNumber()
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
