<?php

namespace App\Http\Controllers;
use App\DataTables\ProvidersDataTable;
use App\Models\User;


use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ProvidersDataTable $dataTable)
    {
        return $dataTable->render('admin.providers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.providers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'image' => ['image'],
            'name' => ['required', 'max:20'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone' => ['nullable', 'digits:10'],
            'password' => [
                'required',
                'min:8',              // Minimum length of 8 characters
                'regex:/[A-Z]/',      // At least one uppercase letter
                'regex:/[a-z]/',      // At least one lowercase letter
                'regex:/[0-9]/',      // At least one number
                // You can add more specific rules or constraints as needed
            ],
        ], [
            'password.regex' => 'The password must contain at least one uppercase letter, one lowercase letter, and one number.',
        ] );


        $filename = '';

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/uploads/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/uploads/'), $filename);
        } else {
            $filename = 'backend/assets/img/avatars/11.png';
        }

        $customer = new User();

        $customer->image = $filename;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->password = bcrypt($request->password);
        $customer->role = 'provider';

        $customer->save();

        $notification = array(
            'message' => 'Provider has been successfully added.',
            'alert-type' => 'success',
        );
        return redirect()->route('dashboard.providers.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $provider = User::findOrFail($id);
        // $this->deleteImage($customer->image);
        $provider->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
