<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show($id){
        $user = User::findOrFail($id);
        $authId = false;
        if (auth()->check()){
            $authUser = auth()->user()->id;
            if($authUser == $user->id){
                $authId = true;
            }
        }

        return view('user_show') -> with(array('user'=>$user, 'authId'=>$authId));
    }

    public function search(Request $request)
    {
        $imie = $request->get('imie');
        $nazwisko = $request->get('nazwisko');
        $users = User::where('firstName', $imie)
            ->orWhere('secondName', $nazwisko)->get();
        return view('/search')->with('users', $users);
    }


}
