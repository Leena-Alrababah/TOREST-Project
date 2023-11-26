<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller; 
use App\Models\ContactUS;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactUSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.contactUs.contact');
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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        ContactUS::create($request->all());



        Alert::success('Your Message was Sent Successfully', 'The Admin will reply to you as soon as possible');


        return redirect()->route('contact.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(ContactUS $contactUS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUS $contactUS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactUS $contactUS)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactUS $contactUS)
    {
        //
    }
}
