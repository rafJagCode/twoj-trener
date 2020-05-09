<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class TrainersController extends Controller
{
    public function show(){

        $users = User::all();
        return view('trainers.trainer_dashboard', compact('users'));
    }
}
