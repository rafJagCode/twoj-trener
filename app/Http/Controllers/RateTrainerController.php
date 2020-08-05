<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ratings;
use Illuminate\Http\Request;

class RateTrainerController extends Controller
{
    public function rate(Request $request,$id){
        $trainer = User::findOrFail($id);
        $rating= new Ratings();
        $rating->stars=$request->input('stars');
        $rating->note=$request->input('note');
        $rating->save();
        $trainer->ratings()->attach($rating->id);

        return back();
    }
}
