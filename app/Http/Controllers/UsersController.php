<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use App\Models\Diets;
use App\Models\Dysciplines;
use App\Models\Gyms;
use App\Models\User as AppUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /*  sprawdzenie czy użytkownik jest zalogowany   */
    /*   public function __construct()
    {
        $this->middleware('auth');
    } */

    public function index()
    { }

    public function create()
    {
        # code...
    }

    public function store(Request $request)
    {

        print_r($request->input(''));

      /*   $user = new User();
        $user->firstName = $request->input('firstName');
        $user->secondName = $request->input('secondName'); */
        /*  $user->city = $request->input('city'); */
      /*   $user->phoneNumber = $request->input('phoneNumber');
        $user->save();
         */
    }

    public function show()
    {

        $loggedUser = auth()->user();
        $disciplines = Dysciplines::pluck('name');
        $cities = User::all('city');

        return view('users.trainer_dashboard', compact('loggedUser', 'disciplines', 'cities'));
    }

    public function edit(user $user)
    {
     
    }

    public function update(Request $request, $user )
    {
        error_log($request('firstName'));
        error_log($request('secondName'));
        error_log($request('phoneNumber'));
        error_log($request('city'));
        error_log($request('discipline'));

        redirect('/trainer_dashboard#');
     /*    
      $user-> User::findOrFail($request->user_id);

      $user->update($request->all()); */
    }

    public function destroy(user $user)
    {
        //
    }
}
