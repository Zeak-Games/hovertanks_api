<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'testing',
            'content' => $this->faker->sentence(30),
            'map' => 'testing',
            'type' => 'other',
            'gameseconds' => rand(0, 100),
            'bundleid' => $this->faker->sentence(1)
        ];
    }
}
