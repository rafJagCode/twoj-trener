<?php

namespace App\Http\Controllers;

use App\Models\Dysciplines;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class WelcomeController extends Controller
{
    public function show(){
        $allDisciplines= Dysciplines::all();
       // dd($allDisciplines);
        $matchedTrainers= Collection::make();
        return view('welcome',compact('allDisciplines','matchedTrainers'));
    }
}
