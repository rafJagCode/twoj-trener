<?php

namespace App\Http\Controllers;

use App\Models\Dysciplines;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Collection;

class SearchController extends Controller
{
    public function search(Request $request){
        $city= $request->input('city');
        $allDisciplines = Dysciplines::all();
        $checkedDisciplines= $request->input('disciplines');
        $trainers= User::where('city',$city)->get();

        $matchedTrainers= Collection::make();
        foreach ($trainers as $trainer){
            $result= true;
            foreach ( $checkedDisciplines as $dis){
                if(! $trainer->disciplines()->get()->contains($dis))
                    $result=false;
            }
            if($result)
                $matchedTrainers->push($trainer);
        }

       //d($matchedTrainers);

        return view('welcome',compact('matchedTrainers','allDisciplines'));
    }
}
