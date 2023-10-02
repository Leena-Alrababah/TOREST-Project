<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function indexAdmin(){
        return view('admin.home.adminHome');
    }

    public function indexProvider()
    {
        return view('provider.home.providerHome');
    }
}
