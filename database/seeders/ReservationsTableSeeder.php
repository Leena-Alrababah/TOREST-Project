<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reservation;


class ReservationsTableSeeder extends Seeder
{
    public function run()
    {
       

        // Define reservation data
        $reservations = [
            [
                'user_id' => 4,
                'restaurant_id' => 1,
                'table_id' => 1,
                'reservation_date' => '2023-10-15',
                'reservation_time' => '18:30:00',
                'name' => 'Guest 1',
                'email' => 'guest1@example.com',
                'phone' => '123-456-7890',
                'reservation_status' => 'pending',
            ],
            [
                'user_id' => 4,
                'restaurant_id' => 1,
                'table_id' => 2,
                'reservation_date' => '2023-10-16',
                'reservation_time' => '19:00:00',
                'name' => 'Guest 2',
                'email' => 'guest2@example.com',
                'phone' => '987-654-3210',
                'reservation_status' => 'pending',
            ],
            [
                'user_id' => 4,
                'restaurant_id' => 2,
                'table_id' => 3,
                'reservation_date' => '2023-10-15',
                'reservation_time' => '18:30:00',
                'name' => 'Guest 1',
                'email' => 'guest1@example.com',
                'phone' => '123-456-7890',
                'reservation_status' => 'pending',
            ],
            [
                'user_id' => 4,
                'restaurant_id' => 2,
                'table_id' => 4,
                'reservation_date' => '2023-10-16',
                'reservation_time' => '19:00:00',
                'name' => 'Guest 2',
                'email' => 'guest2@example.com',
                'phone' => '987-654-3210',
                'reservation_status' => 'pending',
            ],
            // Add more reservation data as needed
        ];

        // Insert the reservations into the 'reservations' table
        Reservation::insert($reservations);
    }
}
