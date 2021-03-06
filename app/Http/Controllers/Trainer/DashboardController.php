<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Cities;
use App\Models\Dysciplines;
use App\Models\User;
use App\Models\Images; //model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image; //Intervention image
use Illuminate\Support\Facades\File; 
use App\Http\Requests\UpdateUserRequest;

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
        if (auth()->check()) {
            $user = auth()->user();

            $cities = User::select('city')->groupBy('city')->get();
            $disciplines = Dysciplines::all();
            $checkedDisciplines = $user->disciplines()->get();
            $description = $user->description;
            $photos = $user->images()->get();
            $certificates = $user->certificates()->get();

            return view('trainer_dashboard.dashboard', compact('user', 'disciplines', 'checkedDisciplines', 'cities', 'photos', 'description', 'certificates'));
        } else
            return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request)
    {
        $user = auth()->user();

        if($request->hasFile('profilePicture')){
            //usuwanie starego pliku
            if($user->profilePicture != 'profile.jpg')
            {
            $oldpath = public_path().'/images/avatars/'.$user->profilePicture;
            File::delete($oldpath);
            }
            
            $avatar = $request -> file('profilePicture');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)-> resize(300,300)->save(public_path('images/avatars/' . $filename));
            $user->profilePicture = $filename;
        }

       
        $user->firstName = $request->input('firstName');
        $user->secondName = $request->input('secondName');
        $user->city = $request->input('city');
        $user->phoneNumber = $request->input('phoneNumber');
        $user->disciplines()->sync($request->input('disciplines'));
        $user->save();

        return redirect('trainer-dashboard');
    }

    public function updateDescription(Request $request)
    {
        $user = auth()->user();
        $user->description = $request->input('description');
        $user->save();
        return redirect('trainer-dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
