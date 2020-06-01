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

    
    }

    public function show()
    {

      
    }

    public function edit(user $user)
    {
     
    }

    public function update(Request $request, $user )
    {
       
    
    }

    public function destroy(user $user)
    {
        //
    }
}
