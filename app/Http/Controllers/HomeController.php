<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        if (Auth::id()) {
            $role = Auth()->user()->role;

            if ($role == 'customer') {
                return view('frontend.home.home');
            } elseif ($role == 'admin') {
                return view('admin.home.adminHome');
            } elseif ($role == 'provider') {
                return view('provider.home.providerHome');
            } else {
                return redirect()->back();
            }
        }
    }


    public function homePage()
    {
        // Trendy Section:
        $topRestaurants = Restaurant::withCount('reservations')
            ->orderByDesc('reservations_count')
            ->take(4)
            ->get();

        $recentRestaurants = Restaurant::orderByDesc('created_at')
            ->take(4)
            ->get();

        $restaurantsByDiscount = Restaurant::orderByDesc('discount_percentage')
            ->take(4)
            ->get();

        return view('frontend.home.home', compact('topRestaurants', 'recentRestaurants', 'restaurantsByDiscount'));
    }
}
