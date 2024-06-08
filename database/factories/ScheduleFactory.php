<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'monday' => json_encode([
                [$this->faker->numberBetween(7,12), $this->faker->numberBetween(17,22)]
            ]),
            'tuesday' => json_encode([
                [$this->faker->numberBetween(7,12), $this->faker->numberBetween(17,22)]
            ]),
            'wednesday' => json_encode([
                [$this->faker->numberBetween(7,12), $this->faker->numberBetween(17,22)]
            ]),
            'thursday' => json_encode([
                [$this->faker->numberBetween(7,12), $this->faker->numberBetween(17,22)]
            ]),
            'friday' => json_encode([
                [$this->faker->numberBetween(7,12), $this->faker->numberBetween(17,22)]
            ]),
            'saturday' => json_encode([
                [$this->faker->numberBetween(7,12), $this->faker->numberBetween(17,22)]
            ]),
            'sunday' => json_encode([
                [$this->faker->numberBetween(7,12), $this->faker->numberBetween(17,22)]
            ]),
            'history' =>json_encode([
            ]),
        ];
    }
}
