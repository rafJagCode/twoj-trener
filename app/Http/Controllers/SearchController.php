<?php

namespace App\Http\Controllers;

use App\Models\Dysciplines;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Collection;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        $allDisciplines = Dysciplines::all();
        $checkedDisciplines = $request->input('disciplines');
        $trainers=null;
        if ($request->input('city') != null) {
            $city = $request->input('city');
            $trainers = User::where('city', $city)->get();
        }
        $trainers=User::all();
        $matchedTrainers = Collection::make();
        foreach ($trainers as $trainer) {
            $result = true;
            foreach ($checkedDisciplines as $dis) {
                if (!$trainer->disciplines()->get()->contains($dis))
                    $result = false;
            }
            if ($result)
                $matchedTrainers->push($trainer);
        }


        //d($matchedTrainers);

        return view('welcome', compact('matchedTrainers', 'allDisciplines'));
    }
}
