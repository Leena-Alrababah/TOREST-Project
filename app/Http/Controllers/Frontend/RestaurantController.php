<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;


class RestaurantController extends Controller
{
    public function index()
    {
        // Retrieve all restaurants with review counts
        $restaurants = Restaurant::withCount('reviews')->get();

        return view('frontend.restaurants.restaurants', compact('restaurants'));
    }
}
