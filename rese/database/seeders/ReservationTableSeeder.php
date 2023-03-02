<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reservation;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservations = [
            [
                'user_id' => 1,
                'restaurant_id' => 1, 
                'date' => '2023-01-01',
                'time' => '19:00',
                'number' => 3,
            ],
            [
                'user_id' => 1,
                'restaurant_id' => 2, 
                'date' => '2023-01-15',
                'time' => '22:00',
                'number' => 1,
            ],
            [
                'user_id' => 2,
                'restaurant_id' => 3, 
                'date' => '2023-12-25',
                'time' => '19:00',
                'number' => 2,
            ],
            [
                'user_id' => 3,
                'restaurant_id' => 1, 
                'date' => '2023-01-01',
                'time' => '19:00',
                'number' => 3,
            ],  
        ];

        foreach ($reservations as $reservation) {
            Reservation::create($reservation);
        }
    }
}
