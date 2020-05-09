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
    $userName = 'John';
    return view('trainer_dashboard',[
        'userName' => $userName
    ]);
}); */

Route::get('/trainer_dashboard', [
    'uses' => 'UsersController@show',
    'as' => 'users.show'
]);

Route::get('/registration', function () {
    return view('registration');
});
