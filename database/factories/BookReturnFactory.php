<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookReturnFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_pinjam' => mt_rand(1, 10),
            'tgl_pengembalian' => $this->faker->date('Y-m-d'),
        ];
    }
}
