<?php

use App\Http\Controllers;
use App\Http\Controllers\User;
use App\Models\User as AppUser;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\HttpFoundation\Request;

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



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', 'HomeController@index')->name('home');



//Middleware dla trenera--------------------------------------------------------------------------------------------------
Route::group([
    'middleware' => 'roles',
    'roles'=>'Trainer'
], function () {

    Route::get('/trainer-dashboard', 'Trainer\DashboardController@index')->name('trainer-dashboard.index');
    Route::patch('/trainer-dashboard', 'Trainer\DashboardController@update')->name('trainer-dashboard.update');
    Route::post('/trainer-dashboard', 'ImageController@save')->name('save.image');
    Route::post('/certificate', 'CertificateController@uploadCertificate')->name('save.certificate');
    Route::get('deleteimage/{id}', 'ImageController@delete');
    Route::get('deletecertificate/{id}', 'CertificateController@delete');
    Route::put('/trainer-dashboard', 'Trainer\DashboardController@updateDescription')->name('trainer-dashboard.updateDescription');


    });



  //Middleware dla usera --------------------------------------------------------------------------------------------------
    Route::group([
        'middleware' => 'roles',
        'roles'=> 'User'
    ], function () {

        Route::get('/user-dashboard', 'User\UserDashboardController@index')->name('user.dashboard');
        Route::get('/user/{id}', 'User\UserController@show');
        Route::get('/user/index/{id}', 'User\UserController@index')->name('user.index');
        Route::get('/user/show/{id}', 'User\UserController@show')->name('user.show');
        Route::patch('/user/update/{id}', 'User\UserController@update')->name('user.update');
        Route::post('/user/update/{id}', 'User\UserController@update')->name('user.update');
        Route::post('trainer/{id}','RateTrainerController@rate')->name('rate');
        });



Route::get('/registration', function () {
    return view('registration');
});


Route::get('/login', function () {
    return view('login');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');




Route::post('/rate/{id}','RateTrainerController@rate')->name('rate');
Route::get('trainer/{id}','Trainer\PageController@show')->name('trainer.show');



Route::post("/",'SearchController@search')->name('user.search');
//Route::get("/",'WelcomeController@show')->name('welcome.show');





//Routes for Searchbar------------------------------------------------------------------------------------------------------
Route::get('/search', function () {
    return view('search');
});
Route::post('/search', 'SearchController@index')->name('search.index');
Route::get('/results', function(){
    return view('results');
});
Route::get('/trainers-page/{id}', 'SearchController@show')->name('search.show');
