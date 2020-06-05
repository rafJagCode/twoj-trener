<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Cities;
use App\Models\Dysciplines;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(auth()->check()) {
            $user = auth()->user();
            $cities = User::select('city')->groupBy('city')->get() ;
            $disciplines = Dysciplines::all();
            $checkedDisciplines= $user->disciplines()->get();

            $photos = [
                "photo1" => "http://4.bp.blogspot.com/-fmWvJFVZZxI/Uc5iK_5EKfI/AAAAAAAAEbs/2Qt7I-XNHwc/s550/nature+photography+(1).jpg",
                "photo2" => "http://3.bp.blogspot.com/-s89PXSoX9hw/Uc5iVGHzy6I/AAAAAAAAEdA/hOrjxoc9cRA/s550/nature+photography+(2).jpg",
                "photo3" => "http://2.bp.blogspot.com/-gK83D-ZxrAA/Uc5iVP_hJJI/AAAAAAAAEc8/omD_Y_U8TdQ/s550/nature+photography+(3).jpg",
                "photo4" => "https://picsum.photos/3000"
            ];
            $description = "Opis trenera";

            return view('users\trainer_dashboard',compact('user','disciplines','checkedDisciplines','cities','photos','description'));
        }
        else
            return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user= auth()->user();
        $user->firstName= $request->input('firstName');
        $user->secondName= $request->input('secondName');
        $user->city= $request->input('city');
        $user->phoneNumber= $request->input('phoneNumber');
        $user->disciplines()->sync($request->input('disciplines'));

        $user->save();
        return redirect('/trainer-dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
