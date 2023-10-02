<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        if(Auth::id()){
            $role = Auth()->user()->role;

            if($role == 'customer'){
                return view('dashboard');
            } 
            
            elseif($role == 'admin'){
                return view('admin.home.adminHome');
            } 
            
            elseif ($role == 'provider') {
                return view('provider.home.providerHome');
            }

            else{
                return redirect()->back();
            }
        }
    }
}
