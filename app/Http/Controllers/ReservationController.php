<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\DataTables\ReservationsDataTable;
use App\Models\Restaurant;
// use App\Models\Table;
use Illuminate\Support\Facades\Auth;




class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ReservationsDataTable $dataTable)
    {
        $isAdmin = auth()->user()->role == 'admin';

        if ($isAdmin) {
            return $dataTable->render('admin.reservations.index');
        } else {
            return $dataTable->render('provider.reservations.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user(); // Assuming you have authentication set up
        $restaurant = Restaurant::where('user_id', $user->id)->first();
        // $tables = Table::where('restaurant_id', $restaurant->id)->get();

        $tables = $restaurant->tables;

        return view('provider.reservations.create', [
            'tables' => $tables,
            // 'restaurant' => $restaurant,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'table_id' => ['required', 'exists:tables,id'],
            'reservation_date' => ['required', 'date'],
            'reservation_time' => ['required'],
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'digits:10'],
            // 'reservation_status' => ['required'],
            // Add other relevant validation rules as needed
        ]);

        // Get the currently logged-in user (provider)
        $user = auth()->user();

        // Find the restaurant associated with the provider
        $restaurant = Restaurant::where('user_id', $user->id)->first();

        $reservation = new Reservation();

        $reservation->user_id = $user->id; // Use $user->id to get the user's ID
        $reservation->restaurant_id = $restaurant->id; // Use $restaurant->id to get the restaurant's ID
        $reservation->table_id = $request->table_id;
        $reservation->reservation_date = $request->reservation_date;
        $reservation->reservation_time = $request->reservation_time;
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        // $reservation->reservation_status = $request->reservation_status;

        // Set other reservation attributes as needed

        $reservation->save();

        $notification = array(
            'message' => 'Reservation has been added successfully.',
            'alert-type' => 'success',
        );
        return redirect()->route('dashboard.reservations.index')->with($notification);
    }


    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        // $this->deleteImage($restaurant->image);
        $reservation->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
    // public function providerReservations(ReservationsDataTable $dataTable)
    // {
    //     return $dataTable->render('provider.reservations.index');
    //     // return $dataTable->render('provider.reservations.index');
    // }
}
