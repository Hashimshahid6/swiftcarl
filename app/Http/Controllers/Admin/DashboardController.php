<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class DashboardController extends AdminController
{
    public function index()
    {
        return view('backend.index');
    }
}
