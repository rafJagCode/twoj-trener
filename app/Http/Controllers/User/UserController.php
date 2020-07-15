<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use Image;

class UserController extends Controller
{
    /* problemy z cache-m
     public function AuthRouteAPI(Request $request){
    return $request->user();
 } */



    public function index($id)
    {
        $user = User::findOrFail($id);
        $authId = false;
        if (auth()->check()){
            $authUser = auth()->user()->id;
            if($authUser == $user->id)
                $authId = true;
        }
        return view('users.user_show') -> with(array('user'=>$user, 'authId'=>$authId));
    }

    public function search(Request $request)
    {
        $imie = $request->get('imie');
        $nazwisko = $request->get('nazwisko');
        $user = User::where('firstName', $imie)->orWhere('secondName', $nazwisko)->get();

        return view('users.user_show')->with('user', $user);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $cities = User::select('city')->groupBy('city')->get();
        return view('users.user_update', compact('user', 'cities'));
    }


    public function updateProfilePicture(Request $request)
    {

    }

    public function update(UpdateUserRequest $request) 
    {
        $user = auth()->user();

        if($request->hasFile('profilePicture')){
            $avatar = $request -> file('profilePicture');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)-> resize(300,300)->save(public_path('images/avatars/' . $filename));
            $user->profilePicture = $filename;
        }
      
        $user->firstName = $request->input('firstName');
        $user->secondName = $request->input('secondName');
        $user->city = $request->input('city');
        $user->phoneNumber = $request->input('phoneNumber');
        $user->save();
        return redirect('user-dashboard');
    }
}
