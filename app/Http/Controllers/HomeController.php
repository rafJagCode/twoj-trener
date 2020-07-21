<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dysciplines;

class HomeController extends Controller
{
    public function index()
    {
        $allDisciplines = Dysciplines::all();
        $users = collect();
        foreach (User::all() as $user)
            if ($user->isTrainer())
                $users->push($user->id);
        // dd($users);
        $matchedTrainers = User::whereIn('id',$users)->get()->sortBy(function($value, $key) {
            return $value->avgStars();
            //liczba wyswietlanych rekordow
        }, SORT_REGULAR, true)->slice(0,6);
        // dd($matchedTrainers);
        
        return view('index', compact('matchedTrainers','allDisciplines'));
    }
}
