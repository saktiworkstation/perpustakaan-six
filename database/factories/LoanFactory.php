<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LoanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'buku_id' => mt_rand(1, 10),
            'user_id' => mt_rand(1, 10),
            'tgl_pinjam' => $this->faker->date('Y-m-d'),
            'status' => mt_rand(1, 2)
        ];
    }
}
