<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
<<<<<<< HEAD
use http\Client\Curl\User;
=======
>>>>>>> ff7a9d383427404e59788aeb11c038ea9fbf016f
=======
>>>>>>> develop
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $user= auth()->user();
        return view('home',['firstname'=>$user->firstName]);
=======
        return view('home');
>>>>>>> ff7a9d383427404e59788aeb11c038ea9fbf016f
=======
        return view('home');
>>>>>>> develop
    }
}
