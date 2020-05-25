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

<<<<<<< HEAD
=======

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


/* Route::group([
    'middleware' => 'roles',
    'roles' => 'Trainer'
], function () {

    Route::get('/trainer_dashboard', [
        'uses' => 'UsersController@show',
        'as' => 'users.show'
    ]);
});
 */

Route::get('/trainer_dashboard', [
    'uses' => 'UsersController@show',
    'as' => 'users.show'
]);

Route::post('/trainer_dashboard', [
    'uses' => 'UsersController@store',
    'as' => 'users.update'
]);


>>>>>>> 7cbb99ea5cb6ab2c0bd89bf7d4319ef2bc90ad30
Route::get('/registration', function () {
    return view('registration');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/login', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD


Route::get('/trainer-dashboard', 'Trainer\DashboardController@index')->name('trainer-dashboard.index');
Route::patch('/trainer-dashboard', 'Trainer\DashboardController@update')->name('trainer-dashboard.update');


Route::get('/user_dashboard', 'UserDashboardController@index')->name('user_dashboard');
Route::get('user/{id}', 'UserController@show');
=======
>>>>>>> 7cbb99ea5cb6ab2c0bd89bf7d4319ef2bc90ad30
