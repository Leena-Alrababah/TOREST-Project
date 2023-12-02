<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Support\Carbon;

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
                'created_at' => now(),

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
                'description' => 'Description for Restaurant ',
                'discount_percentage' => 10,
                'dishes_type' => 'Mexican',
                'created_at' => now(),

            ],
            [
                'user_id' => 5,
                'name' => 'Grill Mark Restaurant',
                'image1' => 'frontend/img2/grilmark.jpg',
                'image2' => 'frontend/img2/grilmark.jpg',
                'image3' => 'frontend/img2/grilmark.jpg',
                'image4' => 'frontend/img2/grilmark.jpg',
                'opening_hours_from' => '20:00',
                'opening_hours_to' => '21:00',
                'address' => 'Irbid - Wasfital Street',
                'location' => 'https://goo.gl/maps/qW1ozVuewurwsonq9',
                'description' => 'Description for Restaurant ',
                'discount_percentage' => 15,
                'dishes_type' => 'Burger',
                'created_at' => now(),

            ],
            [
                'user_id' => 6,
                'name' => 'Alharam Restaurant & Cafe',
                'image1' => 'frontend/img2/haram.jpg',
                'image2' => 'frontend/img2/haram.jpg',
                'image3' => 'frontend/img2/haram.jpg',
                'image4' => 'frontend/img2/haram.jpg',
                'opening_hours_from' => '12:00',
                'opening_hours_to' => '19:30',
                'address' => 'Irbid - Wasfital Street',
                'location' => 'https://goo.gl/maps/qW1ozVuewurwsonq9',
                'description' => 'Description for Restaurant ',
                'discount_percentage' => 30,
                'dishes_type' => 'Shish Tawook',
                'created_at' => now(),

            ],
            [
                'user_id' => 7,
                'name' => 'مطعم وكافية بزرة',
                'image1' => 'frontend/img2/byzreh.jpg',
                'image2' => 'frontend/img2/byzreh.jpg',
                'image3' => 'frontend/img2/byzreh.jpg',
                'image4' => 'frontend/img2/byzreh.jpg',
                'opening_hours_from' => '09:00',
                'opening_hours_to' => '22:00',
                'address' => 'Irbid - Wasfital Street',
                'location' => 'https://goo.gl/maps/qW1ozVuewurwsonq9',
                'description' => 'Description for Restaurant ',
                'discount_percentage' => 35,
                'dishes_type' => 'Burger',
                'created_at' => now(),

            ],

            [
                'user_id' => 8,
                'name' => 'مطعم شرف الدين',
                'image1' => 'frontend/img2/sharaf.jpg',
                'image2' => 'frontend/img2/sharaf.jpg',
                'image3' => 'frontend/img2/sharaf.jpg',
                'image4' => 'frontend/img2/sharaf.jpg',
                'opening_hours_from' => '09:00',
                'opening_hours_to' => '22:30',
                'address' => 'Irbid - Wasfital Street',
                'location' => 'https://goo.gl/maps/qW1ozVuewurwsonq9',
                'description' => 'Description for Restaurant ',
                'discount_percentage' => 40,
                'dishes_type' => 'Shish Tawook',
                'created_at' => now(),

            ],
            [
                'user_id' => 9,
                'name' => 'Leyl & Nhar',
                'image1' => 'frontend/img2/leyl.jpg',
                'image2' => 'frontend/img2/leyl.jpg',
                'image3' => 'frontend/img2/leyl.jpg',
                'image4' => 'frontend/img2/leyl.jpg',
                'opening_hours_from' => '09:00',
                'opening_hours_to' => '22:00',
                'address' => 'Irbid - Wasfital Street',
                'location' => 'https://goo.gl/maps/qW1ozVuewurwsonq9',
                'description' => 'Description for Restaurant ',
                'discount_percentage' => 40,
                'dishes_type' => 'Fettuccine',
                'created_at' => now(),

            ],

            [
                'user_id' => 10,
                'name' => 'مطاعم أبو رياض',
                'image1' => 'frontend/img2/ryad.jpg',
                'image2' => 'frontend/img2/ryad.jpg',
                'image3' => 'frontend/img2/ryad.jpg',
                'image4' => 'frontend/img2/ryad.jpg',
                'opening_hours_from' => '09:00',
                'opening_hours_to' => '19:30',
                'address' => 'Irbid - Wasfital Street',
                'location' => 'https://goo.gl/maps/qW1ozVuewurwsonq9',
                'description' => 'Description for Restaurant ',
                'discount_percentage' => 50,
                'dishes_type' => 'Shish Tawook',
                'created_at' => now(),

            ],
            [
                'user_id' => 11,
                'name' => 'Cappado.irbid',
                'image1' => 'frontend/img2/cappado.jpg',
                'image2' => 'frontend/img2/cappado.jpg',
                'image3' => 'frontend/img2/cappado.jpg',
                'image4' => 'frontend/img2/cappado.jpg',
                'opening_hours_from' => '09:00',
                'opening_hours_to' => '21:30',
                'address' => 'Irbid - Wasfital Street',
                'location' => 'https://goo.gl/maps/qW1ozVuewurwsonq9',
                'description' => 'Description for Restaurant',
                'discount_percentage' => 30,
                'dishes_type' => 'Burger',
                'created_at' => now()->addDays(2),
            ],
            [
                'user_id' => 12,
                'name' => 'Karaz Rest & Cafe',
                'image1' => 'frontend/img2/karaz.jpg',
                'image2' => 'frontend/img2/karaz.jpg',
                'image3' => 'frontend/img2/karaz.jpg',
                'image4' => 'frontend/img2/karaz.jpg',
                'opening_hours_from' => '09:00',
                'opening_hours_to' => '21:00',
                'address' => 'Irbid - Wasfital Street',
                'location' => 'https://goo.gl/maps/qW1ozVuewurwsonq9',
                'description' => 'Description for Restaurant',
                'discount_percentage' => 25,
                'dishes_type' => 'Pizza',
                'created_at' => now()->addDays(2),
            ],
            [
                'user_id' => 13,
                'name' => 'VOGO Cafe',
                'image1' => 'frontend/img2/vogo.jpg',
                'image2' => 'frontend/img2/vogo.jpg',
                'image3' => 'frontend/img2/vogo.jpg',
                'image4' => 'frontend/img2/vogo.jpg',
                'opening_hours_from' => '09:00',
                'opening_hours_to' => '21:00',
                'address' => 'Irbid - Wasfital Street',
                'location' => 'https://goo.gl/maps/qW1ozVuewurwsonq9',
                'description' => 'Description for Restaurant',
                'discount_percentage' => 20,
                'dishes_type' => 'Pizza',
                'created_at' => now()->addDays(2),
            ],
            [
                'user_id' => 14,
                'name' => 'Al-Rassam',
                'image1' => 'frontend/img2/rassam.jpg',
                'image2' => 'frontend/img2/rassam.jpg',
                'image3' => 'frontend/img2/rassam.jpg',
                'image4' => 'frontend/img2/rassam.jpg',
                'opening_hours_from' => '09:00',
                'opening_hours_to' => '21:00',
                'address' => 'Irbid - Wasfital Street',
                'location' => 'https://goo.gl/maps/qW1ozVuewurwsonq9',
                'description' => 'Description for Restaurant',
                'discount_percentage' => 20,
                'dishes_type' => 'Pizza',
                'created_at' => now()->addDays(2),
            ],
            // Add more restaurant data as needed
        ];

        // Insert the restaurants into the 'restaurants' table
        Restaurant::insert($restaurants);
    }
}
