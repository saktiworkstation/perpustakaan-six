<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'descriptions' => collect($this->faker->paragraphs(mt_rand(1, 2)))->map(function ($p) {
                        return "<p>$p</p>";
                        })->implode(''),
            'status' => mt_rand(1,2)
        ];
    }
}
