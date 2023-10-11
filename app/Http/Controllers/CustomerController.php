<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\CustomersDataTable;
// use App\Http\Requests\UserStoreRequest;
// use Illuminate\Support\Facades\Storage;
use App\Models\User;
// use Illuminate\Support\Facades\Validator;



class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CustomersDataTable $dataTable)
    {
        return $dataTable->render('admin.customers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.customers.create');

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
            'password' => ['required'],
        ]);


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
        $customer->role = 'customer';

        $customer->save();

        return redirect()->route('dashboard.customers.index')->with('success', 'Cutomer has been successfully added.');
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
        $customer = User::findOrFail($id);
        // $this->deleteImage($customer->image);
        $customer->delete();
        
        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
