<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => 'Seeded Admin - ' . (Admin::max('id') + 1) . ' - ' . $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('Pa$$w0rd!$h'),
            'remember_token' => $this->faker->sha256,
            'email_verified_at' => $this->faker->dateTimeBetween('-1 month', '-1 day'),
        ];
    }
}
