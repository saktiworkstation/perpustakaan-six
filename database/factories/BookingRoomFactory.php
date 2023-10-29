<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookingRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'room_id' => mt_rand(1, 10),
            'user_id' => mt_rand(1, 10),
            'waktu_pesan' => $this->faker->date('Y-m-d'),
            'jam' => $this->faker->time(),
        ];
    }
}
