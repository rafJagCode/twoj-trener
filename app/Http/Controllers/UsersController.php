<?php

namespace App\Http\Controllers;

use App\Cities;
use App\Diets;
use App\Dysciplines;
use App\Gyms;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /*  sprawdzenie czy użytkownik jest zalogowany   */
    /*   public function __construct()
    {
        $this->middleware('auth');
    } */

    public function show()
    {

        $loggedUser = auth()->user();
        $disciplines = Dysciplines::pluck('name');
        $cities = Cities::pluck('name');

        return view('users.trainer_dashboard', compact('loggedUser', 'disciplines', 'cities'));
    }

    public function index()
    {

    
    }
 
    public function store (Request $request)
    {
        $user = new User();
        $user->firstName = $request->input('firstName');
        $user->secondName = $request->input('secondName');
       /*  $user->city = $request->input('city'); */
        $user->phoneNumber=$request->input('phoneNumber');
        $user->save();
    }
}
