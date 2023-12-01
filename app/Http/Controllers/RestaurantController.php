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
        // return $dataTable->render('admin.restaurants.index');
        $isAdmin = auth()->user()->role == 'admin';

        if ($isAdmin) {
            return $dataTable->render('admin.restaurants.index');
        } else {
            return $dataTable->render('provider.aboutRestaurant.index');
        }
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
            'address' => ['required', 'max:255'],
            'location' => ['required', 'url', 'max:255'],
            'description' => ['required'],
            'discount_percentage' => ['required', 'numeric', 'between:0,100'],
            'dishes_type' => ['required'],
            'provider' => ['required', 'exists:users,id'], 
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
        $restaurant->address = $request->address;
        $restaurant->location = $request->location;
        $restaurant->description = $request->description;
        $restaurant->discount_percentage = $request->discount_percentage;
        $restaurant->dishes_type = $request->dishes_type;
        $restaurant->user_id = $request->provider; // Associate the provider with the restaurant
        // Set other restaurant attributes as needed

        $restaurant->save();

        $notification = array(
            'message' => 'Restaurant has been successfully added.',
            'alert-type' => 'success',
        );

        return redirect()->route('dashboard.restaurants.index')->with($notification);
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
        $isAdmin = auth()->user()->role == 'admin';
        $restaurant = Restaurant::findOrFail($id);

        if ($isAdmin) {
            $providerUsers = User::where('role', 'provider')->get();
            return view('admin.restaurants.edit', compact('restaurant', 'providerUsers'));
                } else {
            return view('provider.aboutRestaurant.edit', compact('restaurant'));
        }
        
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $isAdmin = auth()->user()->role == 'admin';

        $request->validate([
            'name' => 'required|max:255',
            'image1' => 'image|max:2048', // Image 1
            'image2' => 'image|max:2048', // Image 2
            'image3' => 'image|max:2048', // Image 3
            'image4' => 'image|max:2048', // Image 4
            'opening_hours_from' => 'required',
            'opening_hours_to' => 'required',
            'address' => 'required|max:255',
            'location' => ['required', 'url', 'max:255'],
            'description' => 'required',
            'discount_percentage' => 'required|numeric|between:0,100',
            'dishes_type' => 'required',
            'provider' => $isAdmin ? 'required|exists:users,id' : '', // Only validate if the user is an admin
 
        ]);

        $restaurant = Restaurant::findOrFail($id);

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
        $restaurant->address = $request->address;
        $restaurant->location = $request->location;
        $restaurant->description = $request->description;
        $restaurant->discount_percentage = $request->discount_percentage;
        $restaurant->dishes_type = $request->dishes_type;
        // Set other restaurant attributes as needed


        $providerId = $isAdmin ? $request->provider : auth()->user()->id;
        $restaurant->user_id = $providerId;


        $restaurant->save();

        $notification = array(
            'message' => 'Restaurant has been successfully updated.',
            'alert-type' => 'success',
        );
        return redirect()->route('dashboard.restaurants.index')->with($notification);
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
