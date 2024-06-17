<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'companyId' => 1,
            'workerId' => Worker::factory(),
            'serviceId' =>fake()->numberBetween(1, 10),
            'duration' => fake()->numberBetween(30, 120),
            'price' => fake()->numberBetween(100, 400),
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'created_at' =>fake()->dateTimeBetween('-1 month', 'now'),
            'updated_at' =>fake()->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
