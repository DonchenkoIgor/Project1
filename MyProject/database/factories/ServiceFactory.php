<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    protected $model = \App\Models\Service::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Haircut', 'Shave', 'Beard Trim', 'Hair Coloring', 'Manicure', 'Pedicure',
                'Facial', 'Massage', 'Waxing'
            ]),
            'price' => fake()->numberBetween(100, 400),
            'duration' => fake()->numberBetween(30, 90),
        ];
    }
}
