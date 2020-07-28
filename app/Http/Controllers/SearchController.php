<?php

namespace App\Http\Controllers;

use App\Models\Dysciplines;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;
use App\Models\Dysciplines_has_user;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;

class SearchController extends Controller
{
    public function index()
    {
        $allDisciplines = Dysciplines::all();
        $trainers = collect();
        foreach (User::all() as $user)
            if ($user->isTrainer())
                $trainers->push($user->id);
        $matchedTrainers = User::whereIn('id',$trainers)->orderBy('secondName','asc')->orderBy('firstName','asc')->get();
        // dd($matchedTrainers->get());
        Session::put('matchedTrainers', $matchedTrainers);
        // $matchedTrainers = $matchedTrainers->paginate(4);
        return view('trainers', compact('matchedTrainers', 'allDisciplines'));
    }

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
        $findCheck=null;
        $ocena=$request->input('ocena');
        $mesage=null;
        $matchedTrainers = Collection::make();
        #Pobieranie wszystkich dyscyplin
        $checkedDisciplines = $request->input('disciplines');
        #Pobieranie wszystkich użytkowników trenerów
        $role = Roles::where('name', 'Trainer')->first();
        #kożystanie z funkcji pomocniczej
        $trainers = Collection::make();
        #sprawdzanie czy wprowadzono miasto
        #wyświetlanie wyników po wcisniecu guzika z jedną dyscypliną
        if($request->input('findCheck') != null)
        {
            $findCheck=$request->input('findCheck');
            
            $tmp = User::all();
            #wprowadzanie każdego trenera
            foreach ($tmp as $tm)
            {
                if ($tm->roles()->get()->contains($role))
                {
                    $trainers->push($tm);
                }
                    
            }
                #przechodzenie pojedynczo po każdym trenerze
                foreach ($trainers as $trainer) {
                    $result = 0;
                        #jesili posiada choć jeden pasujący  trening dodaj i 
                        if ($trainer->disciplines()->get()->contains( $findCheck))
                        {
                            $result ++;
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
                $city=1;
                if($matchedTrainers->count()==0)
                {
                    Session()->flash('brak_trenera','Zaden trener się tym nie zajmuje');
                }
                return view('trainers', compact('matchedTrainers', 'allDisciplines','city','trenerDisciplines','mesage'));
        }
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
                if($tm->avgStars()>=$ocena)
                {
                    $trainers->push($tm);
                }
            }
                
        }
        $matchedTrainersCol = collect();
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
                    $matchedTrainersCol->push($trainer->id);
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
                $matchedTrainersCol->push($trainer->id);
            }
            // $matchedTrainersCol=$trainers;
        }
        
        $matchedTrainers = User::whereIn('id',$matchedTrainersCol)->orderBy('secondName','asc')->orderBy('firstName','asc')->get();
        $request->flash();
        // dd($matchedTrainers);
        $request->session()->put('matchedTrainers', $matchedTrainers);
        // $matchedTrainers = $matchedTrainers->paginate(4);
        // session(['matchedTrainers' => $matchedTrainers]);
        return view('trainers', compact('matchedTrainers', 'allDisciplines','city','trenerDisciplines','mesage'));
    }

    public function sort(Request $request)
    {
        
        // $matchedTrainers = session('matchedTrainers', 'default');
        $result = $request->session()->get('matchedTrainers');
        // print_r($result);
        // dd($result[0]['id']);
        
        if($request->ajax())
        {
            $ids = collect();
            foreach($result as $tab)
            {
                $ids->add($tab['id']);
            }
            $sort_type = $request->get('sortby');
            switch($sort_type){
                case 'alphabetAsc':
                    $matchedTrainers = User::whereIn('id',$ids)->orderBy('secondName','asc')->orderBy('firstName','asc')->get();//->paginate(4);
                    break;
                case 'alphabetDesc':
                    $matchedTrainers = User::whereIn('id',$ids)->orderBy('secondName','desc')->orderBy('firstName','desc')->get();//->paginate(4);
                    break;
                case 'quantityAsc':
                    $matchedTrainers = User::whereIn('id',$ids)->get()->sortBy(function($value, $key) {
                        return $value->ratings()->count();
                    }, SORT_REGULAR, false);
                    break;
                case 'quantityDesc':
                    $matchedTrainers = User::whereIn('id',$ids)->get()->sortBy(function($value, $key) {
                        return $value->ratings()->count();
                    }, SORT_REGULAR, true);
                    break;
                case 'avgAsc':
                    $matchedTrainers = User::whereIn('id',$ids)->get()->sortBy(function($value, $key) {
                        return $value->avgStars();
                    }, SORT_REGULAR, false);
                    break;
                case 'avgDesc':
                    $matchedTrainers = User::whereIn('id',$ids)->get()->sortBy(function($value, $key) {
                        return $value->avgStars();
                    }, SORT_REGULAR, true);
                    break;
            }
            return view('trainers_sort',compact('matchedTrainers'))->render();
        }
    }
}
