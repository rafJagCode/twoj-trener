<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);
        return view('users\user_show')->with('user', $user);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $cities = User::select('city')->groupBy('city')->get();
        return view('users\user_update', compact('user', 'cities'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $user->firstName = $request->input('firstName');
        $user->secondName = $request->input('secondName');
        $user->city = $request->input('city');
        $user->phoneNumber = $request->input('phoneNumber');


        $user->save();
        return redirect('/user-dashboard');
    }
}
