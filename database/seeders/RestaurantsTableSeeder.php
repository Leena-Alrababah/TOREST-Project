<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\User;

class RestaurantsTableSeeder extends Seeder
{
    public function run()
    {
       
        // Define restaurant data
        $restaurants = [
            [
                'user_id' => 2,
                'name' => 'Steel',
                'image1' => 'backend/assets/img/defults/steel.jpg',
                'opening_hours_from' => '09:00',
                'opening_hours_to' => '22:00',
                'location' => 'Location 1',
                'description' => 'Description for Restaurant 1',
                'discount_percentage' => 15,
                'dishes_type' => 'Italian',
            ],
            [
                'user_id' => 3,
                'name' => 'Ghoson',
                'image1' => 'backend/assets/img/defults/sharaf.jpg',
                'opening_hours_from' => '09:00',
                'opening_hours_to' => '23:00',
                'location' => 'Location 2',
                'description' => 'Description for Restaurant 2',
                'discount_percentage' => 10,
                'dishes_type' => 'Mexican',
            ],
            // Add more restaurant data as needed
        ];

        // Insert the restaurants into the 'restaurants' table
        Restaurant::insert($restaurants);
    }
}

