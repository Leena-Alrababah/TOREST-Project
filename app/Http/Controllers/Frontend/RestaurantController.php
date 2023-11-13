<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Review;
use RealRashid\SweetAlert\Facades\Alert;

class RestaurantController extends Controller
{
    public function index()
    {
        // Retrieve all restaurants 
        $restaurants = Restaurant::get();

        return view('frontend.restaurants.restaurants', compact('restaurants'));
    }

    public function show($restaurantId)
    {
        // Fetch the specific restaurant from the database, including its menu and tables
        $restaurant = Restaurant::with(['menu', 'reviews'])->find($restaurantId);

        if (!$restaurant) {
            // Handle the case where the restaurant is not found
            return view('404');
        }

        // Load the restaurant details view and pass the $restaurant variable, which now includes both the menu and tables relationships
        return view('frontend.singleRestaurant.single', compact('restaurant'));
    }

    public function AddReview(Request $request, $userId, $restaurantId)
    {
        // dd($userId);
        $review = new Review();

        $review->user_id = $userId;
        $review->restaurant_id = $restaurantId;
        $review->review_text = $request->review;
        $review->rating = $request->rating;

        $review->save();

        Alert::success('Success', 'Your review has been added successfully!');

        return redirect()->back();
    }
}
