<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'penulis' => $this->faker->name(),
            'penerbit' => $this->faker->name(),
            'descriptions' => collect($this->faker->paragraphs(mt_rand(5, 10)))->map(function ($p) {
                        return "<p>$p</p>";
                        })->implode(''),
            'thn_terbit' => $this->faker->date('Y-m-d'),
            'stok' => mt_rand(40, 70),
            'image' => '1'
        ];
    }
}
