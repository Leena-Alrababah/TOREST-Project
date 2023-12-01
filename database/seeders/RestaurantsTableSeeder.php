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
                'user_id' => 3,
                'name' => 'STEEL Restaurant & Cafe',
                'image1' => 'frontend/img2/steel.jpg',
                'image2' => 'frontend/img2/steel-bg1.jpg',
                'image3' => 'frontend/img2/steel-bg2.jpg',
                'image4' => 'frontend/img2/steel-bg3.jpg',
                'opening_hours_from' => '09:00',
                'opening_hours_to' => '23:00',
                'address' => 'Wasfi Al-Tal Street Steel Restaurant & Cafe, Irbid, Jordan',
                'location' => 'https://goo.gl/maps/qW1ozVuewurwsonq9',
                'description' => 'Welcome to the home of The Jordan Legend, Steel! Immerse yourself in an iconic destination that epitomizes the essence of the North. Our restaurant is more than just a place to dine; it\'s a culinary experience that transcends the ordinary. From the moment you step through our doors, you\'ll discover a fusion of flavors, a celebration of culture, and a commitment to excellence.',
                'discount_percentage' => 15,
                'dishes_type' => 'Italian',
            ],
            [
                'user_id' => 4,
                'name' => 'Ghosn Restaurant & Cafe',
                'image1' => 'frontend/img2/ghosn.jpg',
                'image2' => 'frontend/img2/ghosn.jpg',
                'image3' => 'frontend/img2/ghosn.jpg',
                'image4' => 'frontend/img2/ghosn.jpg',
                'opening_hours_from' => '09:00',
                'opening_hours_to' => '20:00',
                'address' => 'Irbid - Wasfital Street',
                'location' => 'https://goo.gl/maps/qW1ozVuewurwsonq9',
                'description' => 'Description for Restaurant 2',
                'discount_percentage' => 10,
                'dishes_type' => 'Mexican',
            ],
            [
                'user_id' => 5,
                'name' => 'Grill Mark Restaurant',
                'image1' => 'frontend/img2/grilmark.jpg',
                'image2' => 'frontend/img2/grilmark.jpg',
                'image3' => 'frontend/img2/grilmark.jpg',
                'image4' => 'frontend/img2/grilmark.jpg',
                'opening_hours_from' => '05:00',
                'opening_hours_to' => '13:00',
                'address' => 'Irbid - Wasfital Street',
                'location' => 'https://goo.gl/maps/qW1ozVuewurwsonq9',
                'description' => 'Description for Restaurant 2',
                'discount_percentage' => 40,
                'dishes_type' => 'Mexican',
            ],
            [
                'user_id' => 5,
                'name' => 'Alharam Restaurant & Cafe',
                'image1' => 'frontend/img2/haram.jpg',
                'image2' => 'frontend/img2/haram.jpg',
                'image3' => 'frontend/img2/haram.jpg',
                'image4' => 'frontend/img2/haram.jpg',
                'opening_hours_from' => '09:00',
                'opening_hours_to' => '19:30',
                'address' => 'Irbid - Wasfital Street',
                'location' => 'https://goo.gl/maps/qW1ozVuewurwsonq9',
                'description' => 'Description for Restaurant 2',
                'discount_percentage' => 30,
                'dishes_type' => 'Mexican',
            ],
            // Add more restaurant data as needed
        ];

        // Insert the restaurants into the 'restaurants' table
        Restaurant::insert($restaurants);
    }
}

