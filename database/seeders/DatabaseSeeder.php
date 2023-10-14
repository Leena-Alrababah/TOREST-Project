<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RestaurantsTableSeeder::class);
        $this->call(TablesTableSeeder::class);
        $this->call(ReservationsTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);

    }
}
