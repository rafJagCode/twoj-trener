<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dysciplines;

class LocationController extends Controller
{
    public function index()
    {
        $users = User::all();
        $dysciplines = Dysciplines::all();

        $cities = collect();

        foreach($users as $user)
        {
            if ($user->city != null)
                $cities->add($user->city);
        }

        return view('location', compact('cities', 'dysciplines'));
    }
}
