<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneBookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),

            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),

        ];
    }
}
