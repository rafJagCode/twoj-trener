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
        $didynt_have_disciplin=collect();
        $can_learn=collect();
        $mesage=null;
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
                    #jesili posiada choć jeden pasujący  trening dodaj i 
                    
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
            #sprawdzanie czy wszystkie wybrnę  dyscypliny mają trenera
            foreach($checkedDisciplines as $dis)
            {
                $result=false;
                for ($i=1; $i <$trenerDisciplines->count() ; $i+=2) { 
                    if($dis==$trenerDisciplines[$i])
                    {
                        $result=true; 
                    }
                }
                if($result==false)
                {
                    $didynt_have_disciplin->push($dis);
                }
            }
            #Jeśli choć jedna dyscyplina nie ma trenera pobierz wszystkie możliwe dyscypliny
            if( $didynt_have_disciplin->count()!=0)
            {
                    foreach($checkedDisciplines as $dis)
                    {
                        $result=false;
                        for ($i=0; $i <$didynt_have_disciplin->count() ; $i++) 
                        { 
                            if($dis==$didynt_have_disciplin[$i])
                            {
                                $result=true;    
                            }
                        }
                    if($result==false)
                        {
                            $can_learn->push($dis);
                        }
                }
                #przygotowywanie wiadomości w czym możemy i w czym nie
                $p=0;
                $mesage= "Nie możemy cię wyszkolić w:" ;
                foreach($allDisciplines as $discyplin)
                {
                    if($p<$didynt_have_disciplin->count() && $discyplin->id==$didynt_have_disciplin[$p])
                    {
                        
                        $mesage .="</br>";
                        $mesage .=$discyplin->name;
                        $p++;
                    }
                }
                $mesage .= "</br>Możemy zoferować trenig:" ;
                $p=0;
                foreach($allDisciplines as $discyplin)
                {
                    if($p<$can_learn->count() && $discyplin->id==$can_learn[$p])
                    {
                        
                        $mesage .="</br>";
                        $mesage .=$discyplin->name;
                        $p++;
                    }
                }
            }
        }
        else
        {
            #przechodzenie pojedynczo po każdym trenerze
            foreach ($trainers as $trainer) 
            {
                #przypisywanie czym zajmuje się dany trener
                foreach ($user_conection_disciplin as $ste)
                {
                    if ($ste->users_id==$trainer->id)
                    {
                        $trenerDisciplines->push($ste->users_id,$ste->dysciplines_id);
                    }   
                }
            }
            $matchedTrainers=$trainers;
        }
        return view('welcome', compact('matchedTrainers', 'allDisciplines','city','trenerDisciplines','mesage'));
    }
    
    
    
    public function show(Request $request)
    {
        $user = User::findOrFail(1);
        $disciplines = $user->disciplines()->get();
        $photos= $user->images()->get();
        $ratings= $user->ratings()->get();
        $certificates= $user->certificates()->get();
        $avgRating=round($ratings->avg('stars'),2);
        return view('trainer_page.trainer_page',compact('user', 'disciplines', 'photos','avgRating','certificates','ratings'));
    }
}
