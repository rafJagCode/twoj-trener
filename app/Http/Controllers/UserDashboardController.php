<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        if (auth()->check())
        {
            $user = auth()->user();
            return view('user_dashboard') -> with('user', $user);
        }
        else{
            return view('login');
        }
    }
}
