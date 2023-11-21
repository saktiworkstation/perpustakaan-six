<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1,10),
            'rate' => mt_rand(1, 5),
            'time_review' => $this->faker->dateTime->format('Y-m-d H:i:s'),
            'descriptions' => collect($this->faker->paragraphs(mt_rand(5, 10)))->map(function ($p) {
                        return "<p>$p</p>";
                        })->implode(''),
        ];
    }
}
