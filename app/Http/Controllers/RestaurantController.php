<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\DataTables\RestaurantsDataTable;
use App\Models\User;



class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(RestaurantsDataTable $dataTable)
    {
        return $dataTable->render('admin.restaurants.index');
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $providerUsers = User::where('role', 'provider')->get();
        return view('admin.restaurants.create', ['providerUsers' => $providerUsers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'image1' => ['image', 'max:2048'], // Image 1
            'image2' => ['image', 'max:2048'], // Image 2
            'image3' => ['image', 'max:2048'], // Image 3
            'image4' => ['image', 'max:2048'], // Image 4
            'opening_hours_from' => ['required', 'date_format:H:i'],
            'opening_hours_to' => ['required', 'date_format:H:i'],
            'location' => ['required', 'max:255'],
            'description' => ['required'],
            'discount_percentage' => ['required', 'numeric', 'between:0,100'],
            'dishes_type' => ['required'],
            'provider' => ['required', 'exists:users,id'], // Add validation for provider ID
            // Add other relevant validation rules as needed
        ]);

        $filenames = [];

        for ($i = 1; $i <= 4; $i++) {
            $fieldName = 'image' . $i;

            if ($request->hasFile($fieldName)) {
                $filename = $request->getSchemeAndHttpHost() . '/uploads/' . time() . $i . '.' . $request->$fieldName->extension();
                $request->$fieldName->move(public_path('/uploads/'), $filename);
                $filenames[] = $filename;
            } else {
                $filenames[] = 'backend/assets/img/defults/defult-menu.png'; // Provide a default image path if no image is uploaded
            }
        }

        $restaurant = new Restaurant();

        $restaurant->name = $request->name;
        $restaurant->image1 = $filenames[0];
        $restaurant->image2 = $filenames[1];
        $restaurant->image3 = $filenames[2];
        $restaurant->image4 = $filenames[3];
        $restaurant->opening_hours_from = $request->opening_hours_from;
        $restaurant->opening_hours_to = $request->opening_hours_to;
        // $restaurant->opening_hours = $request->input('opening_hours', '12:12');
        $restaurant->location = $request->location;
        $restaurant->description = $request->description;
        $restaurant->discount_percentage = $request->discount_percentage;
        $restaurant->dishes_type = $request->dishes_type;
        $restaurant->user_id = $request->provider; // Associate the provider with the restaurant
        // Set other restaurant attributes as needed

        $restaurant->save();

        return redirect()->route('dashboard.restaurants.index')->with('success', 'Restaurant has been successfully added.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        return view('frontend.restaurants.restaurants');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $providerUsers = User::where('role', 'provider')->get();
        $restaurant = Restaurant::findOrFail($id);
        return view('admin.restaurants.edit', compact('restaurant' , 'providerUsers'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image1' => 'image|max:2048', // Image 1
            'image2' => 'image|max:2048', // Image 2
            'image3' => 'image|max:2048', // Image 3
            'image4' => 'image|max:2048', // Image 4
            'opening_hours_from' => 'required',
            'opening_hours_to' => 'required',
            'location' => 'required|max:255',
            'description' => 'required',
            'discount_percentage' => 'required|numeric|between:0,100',
            'dishes_type' => 'required',
            'provider' => 'required|exists:users,id', // Add validation for provider ID
            // Add other relevant validation rules as needed
        ]);

        // Find the restaurant by its ID
        $restaurant = Restaurant::findOrFail($id);

        // Define an array to hold the new image filenames
        $filenames = [];

        for ($i = 1; $i <= 4; $i++) {
            $fieldName = 'image' . $i;

            if ($request->hasFile($fieldName)) {
                $filename = $request->getSchemeAndHttpHost() . '/uploads/' . time() . $i . '.' . $request->$fieldName->extension();
                $request->$fieldName->move(public_path('/uploads/'), $filename);
                $filenames[] = $filename;
            } else {
                // If no new image is uploaded, retain the existing image filename
                $filenames[] = $restaurant->{'image' . $i};
            }
        }

        // Update the restaurant attributes
        $restaurant->name = $request->name;
        $restaurant->image1 = $filenames[0];
        $restaurant->image2 = $filenames[1];
        $restaurant->image3 = $filenames[2];
        $restaurant->image4 = $filenames[3];
        $restaurant->opening_hours_from = $request->opening_hours_from;
        $restaurant->opening_hours_to = $request->opening_hours_to;
        // $restaurant->opening_hours = $request->input('opening_hours', '12:12');
        $restaurant->location = $request->location;
        $restaurant->description = $request->description;
        $restaurant->discount_percentage = $request->discount_percentage;
        $restaurant->dishes_type = $request->dishes_type;
        $restaurant->user_id = $request->provider; // Associate the provider with the restaurant
        // Set other restaurant attributes as needed

        $restaurant->save();

        return redirect()->route('dashboard.restaurants.index')->with('success', 'Restaurant has been successfully updated.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        // $this->deleteImage($restaurant->image);
        $restaurant->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
