<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        //     return view('admin.home.adminHome');
        // }

        // public function indexProvider()
        // {
        //     return view('provider.home.providerHome');
        // }
        $isAdmin = auth()->user()->role == 'admin';

        if ($isAdmin) {
            return view('admin.home.adminHome');
        } else {
            return view('provider.home.providerHome');
        }
    }
}
