<?php

use App\Http\Controllers;
use App\Http\Controllers\User;
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



/*  Route::group([
    'middleware' => 'roles',
    'roles' => 'Trainer'
], function () {
    Route::get('/trainer-dashboard', 'Trainer\DashboardController@index')->name('trainer-dashboard.index');
    Route::patch('/trainer-dashboard', 'Trainer\DashboardController@update')->name('trainer-dashboard.update');
   
});






Route::group([
    'middleware' => 'roles',
    'roles' => 'User'
], function () { 


    Route::get('/trainer_dashboard', [
        'uses' => 'UsersController@show',
        'as' => 'users.show';
    }); */




/* Route::get('/trainer_dashboard', [
    'uses' => 'UsersController@show',
    'as' => 'users.show'
]);

Route::post('/trainer_dashboard', [
    'uses' => 'UsersController@store',
    'as' => 'users.update'
]);
 */
Route::get('/registration', function () {
    return view('registration');
});



Auth::routes();

Route::get('/login', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/trainer-dashboard', 'Trainer\DashboardController@index')->name('trainer-dashboard.index');
Route::patch('/trainer-dashboard', 'Trainer\DashboardController@update')->name('trainer-dashboard.update');


Route::get('/user_dashboard', 'User\UserDashboardController@index')->name('user_dashboard');
Route::get('/user/index/{id}', 'User\UserController@index')->name('user.index');
Route::get('/user/show/{id}', 'User\UserController@show')->name('user.show');
Route::post('/user/update/{id}', 'User\UserController@update')->name('user.update');

