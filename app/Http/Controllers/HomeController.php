<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use http\Client\Curl\User;

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

        $user= auth()->user();
        return view('home',['firstname'=>$user->firstName]);

    }
}
