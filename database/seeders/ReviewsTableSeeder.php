<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewsTableSeeder extends Seeder
{
    public function run()
    {
        // Sample review data
        $reviews = [
            [
                'user_id' => 1, // User ID who left the review
                'restaurant_id' => 1, // Restaurant ID for the review
                'review_text' => 'Great food and service!',
                'rating' => 5,
            ],
            [
                'user_id' => 4,
                'restaurant_id' => 1,
                'review_text' => 'I enjoyed the atmosphere.',
                'rating' => 4,
            ],
            [
                'user_id' => 4,
                'restaurant_id' => 2,
                'review_text' => 'Average experience.',
                'rating' => 3,
            ],
            [
                'user_id' => 1,
                'restaurant_id' => 2,
                'review_text' => 'Average experience.',
                'rating' => 2,
            ],
        ];

        // Insert reviews into the 'reviews' table
        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}

