<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->hasRole('admin')){ //jika admin masuk
            return view('dashboard'); //jika iya maka ke dashboard
        }

        return view('dashboard2'); //jika tidak
    }
}
