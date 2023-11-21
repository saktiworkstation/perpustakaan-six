<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Loan;
use App\Models\Room;
use App\Models\User;
use App\Models\BookReturn;
use App\Models\BookingRoom;
use App\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sakti',
            'username' => 'sakti',
            'jenis_kelamin' => 'laki-laki',
            'email' => 'sakti@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => 1
        ]);

        Room::factory(3)->create();

        Book::factory(10)->create();

        BookingRoom::factory(10)->create();

        BookReturn::factory(20)->create();

        Loan::factory(50)->create();

        Room::factory(10)->create();

        User::factory(10)->create();
    }
}
