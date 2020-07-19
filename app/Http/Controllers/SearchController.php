<?php

namespace App\Http\Controllers;

use App\Models\Dysciplines;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;
use Illuminate\Support\Collection;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $allDisciplines = Dysciplines::all();
        $checkedDisciplines = $request->input('disciplines');
        $role = Roles::where('name', 'Trainer')->first();
        $trainers = Collection::make();
        if ($request->input('city') != null) {
            $city = $request->input('city');
            $tmp = User::where('city', $city)->get();
        } else
            $tmp = User::all();

        foreach ($tmp as $tm)
            if ($tm->roles()->get()->contains($role))
                $trainers->push($tm);

        $matchedTrainersId = collect();
        if ($checkedDisciplines != null)
            foreach ($trainers as $trainer) {
                $result = true;
                foreach ($checkedDisciplines as $dis) {
                    if (!$trainer->disciplines()->get()->contains($dis))
                        $result = false;
                }
                if ($result)
                    $matchedTrainersId->push($trainer->id);
            }
        else
            foreach ($trainers as $trainer) {
                $matchedTrainersId->push($trainer->id);
            }
        
        $matchedTrainers = User::whereIn('id',$matchedTrainersId)->latest()->paginate(3);

        return view('index', compact('matchedTrainers', 'allDisciplines'));
    }
}
