<?php

namespace App\Http\Controllers;

use App\Models\Dysciplines;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;
use App\Models\Dysciplines_has_user;
use Illuminate\Support\Collection;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $city=null;
        $allDisciplines = Dysciplines::all();
        $user_conection_disciplin = Dysciplines_has_user::all();
        $trenerDisciplines =collect();
        $sprawdzoneDisciplines =collect();
        $hom_meny_disciplin_corekt=0;
        
        #Pobieranie wszystkich dyscyplin
        $checkedDisciplines = $request->input('disciplines');
        #Pobieranie wszystkich użytkowników trenerów
        $role = Roles::where('name', 'Trainer')->first();
        #kożystanie z funkcji pomocniczej
        $trainers = Collection::make();
        #sprawdzanie czy wprowadzono miasto
        if ($request->input('city') != null) {
            $city = $request->input('city');
            $tmp = User::where('city', $city)->get();
        } 
        else
        {
            $tmp = User::all();
        }
        #wprowadzanie każdego trenera
        foreach ($tmp as $tm)
        {
            if ($tm->roles()->get()->contains($role))
            {
                $trainers->push($tm);
            }
                
        }
        $matchedTrainers = Collection::make();
        #sprawdzanie zaznaczonych dyscyplin
        if ($checkedDisciplines != null)
        {
            #przechodzenie pojedynczo po każdym trenerze
            foreach ($trainers as $trainer) {
                $result = 0;
                #sprawdzanie czy ma konkretny rodzaj treningu
                foreach ($checkedDisciplines as $dis) {
                    #jesili posiada choć jeden pasujocy trening dodaj i 
                    
                    if ($trainer->disciplines()->get()->contains($dis))
                    {
                        $result ++;
                    }
                    
                }
                if ($result>0)
               {
                    $matchedTrainers->push($trainer);
               }
               #przypisywanie czym zajmuje się dany trener
               foreach ($user_conection_disciplin as $ste)
               {
                   if ($ste->users_id==$trainer->id)
                   {
                       $trenerDisciplines->push($ste->users_id,$ste->dysciplines_id);
                   }
                       
               }
            }
            /*#sprawdzanie czy wszystkie wybrne dyscypliny mają trenera
            foreach($checkedDisciplines as $dis)
            {
                for(int i=1;i<$trenerDisciplines->const();i++)
                {
                    if($die)
                }
            }..*/


        }
        else
        {
            $matchedTrainers=$trainers;
        }
        
        return view('welcome', compact('matchedTrainers', 'allDisciplines','city','trenerDisciplines'));
    }
}
