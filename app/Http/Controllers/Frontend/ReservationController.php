<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Restaurant;
use Carbon\Carbon;



class ReservationController extends Controller
{
    public function stepOne(Request $request)
    {
        $request->validate([
            'date' => 'required|date|after_or_equal:today|before_or_equal:7 days', // Date within one week
            'time' => [
                'required',
                'date_format:H:i', // Time in H:i format
            
                function ($attribute, $value, $fail) use ($request) {
                    $restaurant = Restaurant::find($request->restaurant_id);

                    if (!$restaurant) {
                        $fail("Invalid restaurant selected.");
                        return;
                    }

                    $openingTime = Carbon::createFromFormat('H:i', $restaurant->opening_hours_from);
                    $closingTime = Carbon::createFromFormat('H:i', $restaurant->opening_hours_to);
                    $selectedTime = Carbon::createFromFormat('H:i', $value);

                    if (!$selectedTime->between($openingTime, $closingTime, true)) {
                        $fail("The selected time is outside of the restaurant's opening hours.");
                    }
                },
            ],
            // Add more rules for the table if needed
        ]);

        // Proceed with reservation logic
        // ...

        return redirect()->route('reservation.success')->with('success', 'Reservation successful!');
    }
}
