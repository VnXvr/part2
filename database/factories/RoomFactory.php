<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'roomDescription'=>fake()->sentence(),
            'roomCapacity'=>fake()->numberBetween($min = 2, $max = 12),
            'dateFrom'=>fake()->dateTimeThisMonth(),
            'dateTo'=>fake()->dateTimeBetween('next Tuesday', 'next Tuesday +7 days'),
        ];
    }
}
