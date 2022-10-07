<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Campaign>
 */
class CampaignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> fake()->name,
            'from'=> fake()->dateTimeBetween('1-1-2022','1-6-2022')->format('d-m-Y'),
            'to'=> fake()->dateTimeBetween('1-6-2022','1-1-2023',)->format('d-m-Y'),
            'total'=> fake()->randomFloat('2',0,2),
            'daily_budget'=> fake()->randomFloat('2',0,2),
        ];
    }
}
