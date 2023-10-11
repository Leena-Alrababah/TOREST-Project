<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\DataTables\MenuDataTable;
use App\Models\Restaurant; 
use Illuminate\Support\Facades\Auth;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(MenuDataTable $dataTable)
    {
        return $dataTable->render('provider.menu.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('provider.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['image'],
            'name' => ['required', 'max:255'],
            'description' => ['nullable'],
            'price' => ['required', 'numeric', 'min:0'],
            'type' => ['required', 'in:breakfast,lunch,dinner'],
        ]);

        // Handle the image upload
        $filename = '';

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/uploads/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/uploads/'), $filename);
        } else {
            $filename = 'backend/assets/img/defults/defult-menu.png';
        }

        // Get the currently logged-in user (provider)
        $user = Auth::user();

        // Find the restaurant associated with the provider
        $restaurant = Restaurant::where('user_id', $user->id)->first();

        

        // Create a new Menu instance
        $menu = new Menu();

        // Populate the menu item attributes
        $menu->name = $request->name;
        $menu->image = $filename;
        $menu->description = $request->description;
        $menu->price = $request->price;
        $menu->type = $request->type;

        // Associate the menu item with the restaurant
        $menu->restaurant_id = $restaurant->id;

        // Save the menu item to the database
        $menu->save();

        // Redirect back with a success message
        return redirect()->route('dashboard.menu.index')->with('success', 'Menu item has been added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $menuItem = Menu::findOrFail($id);
        return view('provider.menu.edite', compact('menuItem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'image' => ['image'],
            'name' => ['required', 'max:255'],
            'description' => ['nullable', 'max:1000'],
            'price' => ['required', 'numeric', 'min:0'],
            'type' => ['required', 'in:breakfast,lunch,dinner'],
        ]);

        // Find the menu item by its ID
        $menu = Menu::findOrFail($id);

        // Handle the image update
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/uploads/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/uploads/'), $filename);
            $menu->image = $filename;
        }else{
            unset($menu->image);
        }

        // Update the menu item attributes
        $menu->name = $request->name;
        $menu->description = $request->description;
        $menu->price = $request->price;
        $menu->type = $request->type;

        $menu->save();

        // Redirect back with a success message
        return redirect()->route('dashboard.menu.index')->with('success', 'Menu item has been updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        // $this->deleteImage($menu->image);
        $menu->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
