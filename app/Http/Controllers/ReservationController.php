<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\DataTables\ReservationsDataTable;
// use App\DataTables\ProviderReservationsDataTable;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ReservationsDataTable $dataTable)
    {
        $isAdmin = auth()->user()->role == 'admin';

        // Determine which view to render based on the user's role
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(Reservation $reservation)
    {
        //
    }

    // public function providerReservations(ReservationsDataTable $dataTable)
    // {
    //     return $dataTable->render('provider.reservations.index');
    //     // return $dataTable->render('provider.reservations.index');
    // }
}
