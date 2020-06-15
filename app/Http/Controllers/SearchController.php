<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query =  $request->input('q');
    


         if ($query != null) {

        $wyniki = User::where('secondName', 'like', "%$query%")
            ->orwhere('city', 'like', "%$query%")
            ->orwhere('firstName', 'like', "%$query%")
            ->orWhere(User::dysciplines('name'), 'like', '%$query%')
            ->get();
        $wyniki =    
            dd($wyniki);
 
        if (count($wyniki) > 0) {
            return view('results', compact('wyniki'));
               } else  {
            return view('results')->withMessage('Nie znależiono wyników dla tego zapytania');
        } 
        }
    }
    public function show($id)
    {
        $user = User::findOrFail($id);
        $cities = User::select('city')->groupBy('city')->get();
        $disciplines = $user->disciplines()->get();
        $photos = [
            "photo1" => "https://ae01.alicdn.com/kf/HTB1hg1mwMKTBuNkSne1q6yJoXXal/Women-Yoga-Set-Women-Sport-Suit-Gym-Set-Gym-Clothing-Sportswear-fitness-Wear-Fitness-Suit-Yoga.jpg_640x640.jpg",
            "photo2" => "https://cdn.shopify.com/s/files/1/0158/4748/9584/products/product-image-862007639_1024x1024@2x.jpg?v=1575426525",
            "photo3" => "https://as2.ftcdn.net/jpg/03/24/12/83/500_F_324128389_f7dWYMBeMDT2uFsymos0S90KfUtQ0gRW.jpg",
            "photo4" => "https://i.pinimg.com/474x/be/a7/b0/bea7b0eaaecb59672c8ccd9d0de86123.jpg"
        ];
        $certyficates = [
            "Certyfikat 1" => "https://png.pngtree.com/png-clipart/20190630/original/pngtree-img-file-document-icon-png-image_4165020.jpg",
            "Certyfikat 2" => "https://png.pngtree.com/png-clipart/20190630/original/pngtree-img-file-document-icon-png-image_4165020.jpg",
            "Certyfikat 3" => "https://png.pngtree.com/png-clipart/20190630/original/pngtree-img-file-document-icon-png-image_4165020.jpg",
            "Certyfikat 4" => "https://png.pngtree.com/png-clipart/20190630/original/pngtree-img-file-document-icon-png-image_4165020.jpg"
        ];

        return view('trainer_page\trainer_page', \compact('user', 'disciplines', 'photos', 'certyficates'));
    }
}
