<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Restaurant;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
// use function Laravel\Prompts\alert;

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

                    if ($selectedTime < $openingTime || $selectedTime > $closingTime) {
                        $fail("The restaurant's opening hours are between " . $restaurant->opening_hours_from . " - " . $restaurant->opening_hours_to);
                    }
                },
            ],
            'guests' => 'required|integer|min:1', // Ensure guests is a positive integer
        ]);



        $restaurant = Restaurant::with(['tables'])->find($request->restaurant_id);
        $date = $request->date;
        $time = $request->time;
        $guests = $request->guests;

        
        // dd($filteredTables);
        $filteredTables = $restaurant->tables->filter(function ($table) use ($guests) {
            return $table->status == 'available' && $table->capacity >= $guests;
        });

        if (count($filteredTables) > 0) {
            $restaurantData = [
                'restaurant' => $restaurant,
                'date' => $date,
                'time' => $time,
                'guests' => $guests,
                'filteredTables' => $filteredTables,
            ];
            session()->put('reservationData', $restaurantData);

            // return view('frontend.completeProcess.complete', compact('restaurant', 'date', 'time', 'guests', 'filteredTables'));
            return redirect()->route('userSide.complete.reservation', $restaurant->id);
        } else {
            Alert::error('Error', 'Sorry, no tables are available for ' . $guests . ' guests.');

            // Redirect back or to any other page
            return redirect()->back();
        }
    }


    public function showCompleteReservation(Request $request, $restaurant)
{
        $restaurant = Restaurant::with(['tables'])->find($restaurant);
        // Retrieve the session data using the 'reservationData' key
        $reservationData = session('reservationData');

        // Now, you can access the data in the $reservationData array
        $restaurant = $reservationData['restaurant'];
        $date = $reservationData['date'];
        $time = $reservationData['time'];
        $guests = $reservationData['guests'];
        $filteredTables = $reservationData['filteredTables'];
    
    // $filteredTables = $request->query('filteredTables');
    //     $filteredTables = $restaurant->tables->filter(function ($table) use ($guests) {
    //         return $table->status == 'available' && $table->capacity >= $guests;
    //     });

    // Your controller logic here

    return view('frontend.completeProcess.complete', compact('restaurant', 'date', 'time', 'guests', 'filteredTables'));
}



    public function stepTwo(Request $request)
    {
        // Validate the form data
        $request->validate([
            'table_id' => 'required|exists:tables,id', // Make sure the selected table exists
            'name' => 'required|string|min:4',
            'email' => 'required|email',
            'phone' => 'required',

        ]);

        // Create a new reservation
        $reservation = new Reservation();
        $reservation->user_id = 4;
        $reservation->restaurant_id = $request->restaurant_id;
        $reservation->table_id = $request->table_id;
        $reservation->reservation_date = $request->date;
        $reservation->reservation_time = $request->time;
        $reservation->reservation_status = 'pending';
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;


        $reservation->save();


        Alert::success('Success Title', 'Reservation confirmed!');

        return redirect()->back();

        // return redirect()->route('reservation.success')->with('success', 'Reservation confirmed!');
    }
}
