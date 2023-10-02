<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;
use App\Models\Restaurant; 
use App\DataTables\TablesDataTable;

use Yajra\DataTables\Contracts\DataTable;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TablesDataTable $dataTable)
    {
    //    return view('provider.tables.index');
        return $dataTable->render('provider.tables.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('provider.tables.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'capacity' => ['required', 'numeric', 'min:1'],
            'status' => ['required', 'in:available,occupied,reserved'],
        ]);

        // Get the currently logged-in user (provider)
        $user = auth()->user();

        // Find the restaurant associated with the provider
        $restaurant = Restaurant::where('user_id', $user->id)->first();

        // Create a new Table instance
        $table = new Table();

        // Populate the table attributes
        $table->name = $request->name;
        $table->capacity = $request->capacity;
        // $table->status = $request->status;

        // Associate the menu item with the restaurant
        $table->restaurant_id = $restaurant->id;

        // Save the table to the database
        $table->save();

        // Redirect back with a success message
        return redirect()->route('provider.tables.index')->with('success', 'Table has been added successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Table $table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $table = Table::findOrFail($id);
        return view('provider.tables.edit', compact('table'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => ['required', 'max:255'],
            'capacity' => ['required', 'numeric', 'min:1'],
            'status' => ['required', 'in:available,occupied,reserved'],
        ]);

        // Find the table by its ID
        $table = Table::findOrFail($id);

        // Update the table attributes
        $table->name = $request->name;
        $table->capacity = $request->capacity;
        // $table->status = $request->status;

        $table->save();

        // Redirect back with a success message
        return redirect()->route('provider.tables.index')->with('success', 'Table has been updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $table = Table::findOrFail($id);
        $table->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
