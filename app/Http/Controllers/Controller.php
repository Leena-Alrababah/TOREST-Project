<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    // public function index(UsersDataTable $dataTable)
    // {
    //     return $dataTable->render('admin.customers.index');
    // }
}
