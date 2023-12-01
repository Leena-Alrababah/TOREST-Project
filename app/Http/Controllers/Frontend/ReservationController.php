<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Restaurant;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
// use function Laravel\Prompts\alert;

class ReservationController extends Controller
{
    public function stepOne(Request $request)
    {
        // $time = $request->time;

        // dd($time);


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

            return redirect()->route('userSide.complete.reservation', $restaurant->id);
        } else {
            Alert::error('Error', 'Sorry, no tables are available for ' . $guests . ' guests.');

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


        return view('frontend.completeProcess.complete', compact('restaurant', 'date', 'time', 'guests', 'filteredTables'));
    }



    public function stepTwo(Request $request)
    {
        // $table_id = $request->input('table_id');
        // dd($table_id);
        // Validate the form data
        $request->validate([
            'table_id' => 'required|exists:tables,id', // Make sure the selected table exists
            'name' => 'required|string|min:4',
            'email' => 'required|email',
            'phone' => 'required',

        ]);


        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal_success'),
                "cancel_url" => route('paypal_cancel')
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => 7
                    ]
                ]
            ]
        ]);
        // dd($response);
        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    // Store specific data from the request in the session
                    
                    session([
                        'paymentDetail' => [
                            'restaurant_id' => $request->input('restaurant_id'),
                            'table_id' => $request->input('table_id'),
                            'date' => $request->input('date'),
                            'time' => $request->input('time'),
                            'name' => $request->input('name'),
                            'email' => $request->input('email'),
                            'phone' => $request->input('phone'),
                        ]
                    ]);
                    
                    // dd(session('paymentDetail'));
                    return redirect()->away($link['href']);
                }
            }
        } else {
            return redirect()->route('paypal_cancel');
        }

        // return redirect()->route('reservation.success')->with('success', 'Reservation confirmed!');
    }


    public function success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);

        // dd($response);


        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            $payment = session('paymentDetail');

            $user = Auth::user();
            // dd($payment);
            // Create a new reservation
            $reservation = new Reservation();
            $reservation->user_id = $user->id;
            $reservation->restaurant_id = $payment['restaurant_id'];
            $reservation->table_id = $payment['table_id'];
            $reservation->reservation_date = $payment['date'];
            $reservation->reservation_time = $payment['time'];
            $reservation->reservation_status = 'pending';
            $reservation->name = $payment ['name'];
            $reservation->email = $payment['email'];
            $reservation->phone = $payment['phone'];


            $reservation->save();


            Alert::success('Success', 'Your Reservation is confirmed!');

            return redirect()->route('home');




            // return redirect()->route('index');
        } else {
            return redirect()->route('paypal_cancel');
        }
    }



    public function cancel()
    {
        return redirect()->route('home')->with('error', 'Payment is cancelled!');
    }
}
