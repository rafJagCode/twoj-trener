<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use App\Models\Diets;
use App\Models\Dysciplines;
use App\Models\Gyms;
use App\Models\User as AppUser;
use App\Models\User;
use App\Models\DysciplinesHasUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;
use Symfony\Component\Console\Output\ConsoleOutput;

class UsersController extends Controller
{
  /*  sprawdzenie czy użytkownik jest zalogowany   */
  /*   public function __construct()
    {
        $this->middleware('auth');
    } */

  public function index()
  { }

  public function create()
  {
    # code...
  }

  public function store(Request $request)
  {

    print_r($request->input(''));

    /*   $user = new User();
        $user->firstName = $request->input('firstName');
        $user->secondName = $request->input('secondName'); */
    /*  $user->city = $request->input('city'); */
    /*   $user->phoneNumber = $request->input('phoneNumber');
        $user->save();
         */
  }

  public function show()
  {
    $id = auth()->user('id');
    $loggedUser = auth()->user();
    $disciplines = Dysciplines::all();
    $diets = $loggedUser->diets()->get();

    $cities = User::pluck('city');

    return view('users.trainer_dashboard', compact('loggedUser', 'disciplines', 'cities', 'diets'));
  }

  public function edit(user $user)
  { }
  public function update(Request $request)
  {
    echo ($request);
    dd(request('firstName'));
    dd(request('secondName'));
    dd(request('city'));
    dd(request('discipline'));

    $id = auth()->user('id');
    $user = auth()->user();

    $user->firstName = $request->input('firstName');
    $user->secondName = $request->input('secondName');
    $user->city = $request->input('city');
    $user->update();

    /* nie wiem co robie  */
    $idDyscyplines;
    $disciplines = request('discipline');

    foreach ($disciplines as $discipline) {
      $idDyscyplines = Dysciplines::
      where("name", $discipline)->get('id');

      DysciplinesHasUsers::where('users_id', $id)
        ->update();
    };

   /*  return redirect('/trainer_dashboard'); */
  }

  public function destroy(user $user)
  {
    //
  }
}
