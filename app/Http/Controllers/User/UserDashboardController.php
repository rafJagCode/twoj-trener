<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class UserDashboardController extends Controller
{
    public function index()
    {
        if (auth()->check())
        {
            $user = auth()->user();
            return view('users\user_dashboard') -> with('user', $user);
        }
        else{
            return view('login');
        }
    }
}
