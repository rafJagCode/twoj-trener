<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* Route::get('/trainer_dashboard', function () {
=======
Route::get('/trainer_dashboard', function () {
>>>>>>> develop
    $userName = 'John';
    $cities = [
        'Warszawa',
        'Olsztyn',
        'Kraków',
        'Poznań'
    ];
    $disciplines = [
        'Bodybuilding',
        'Kalistenika',
        'Crossfit',
        'Kettlebel',
        'Cardio',
        'Streetching',
        'Fitnes',
        'Interwały',
        'Fbw'
    ];
    return view('trainer_dashboard',[
        'userName' => $userName,
        'cities' => $cities,
        'disciplines' => $disciplines
    ]);
}); */


Route::group([
    'middleware' => 'roles',
    'roles' => 'Trainer'
], function () {

    Route::get('/trainer_dashboard', [
        'uses' => 'UsersController@show',
        'as' => 'users.show'
    ]);
});



Route::get('/registration', function () {
    return view('registration');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/login', function () {
    return view('login');
});

Auth::routes();
//Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

Route::get('/home', 'HomeController@index')->name('home');



