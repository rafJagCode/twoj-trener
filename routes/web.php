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


Route::get('/trainer_page', function () {
    $disciplines = [
        'bodybuilding',
        'calisthenics',
        'crossfit',
        'kettlebell',
        'cardio',
        'streetching',
        'fitness',
        'intervals',
        'fbw'
    ];
    $photos = [
        "photo1" => "https://ae01.alicdn.com/kf/HTB1hg1mwMKTBuNkSne1q6yJoXXal/Women-Yoga-Set-Women-Sport-Suit-Gym-Set-Gym-Clothing-Sportswear-fitness-Wear-Fitness-Suit-Yoga.jpg_640x640.jpg",
        "photo2" => "https://cdn.shopify.com/s/files/1/0158/4748/9584/products/product-image-862007639_1024x1024@2x.jpg?v=1575426525",
        "photo3" => "https://as2.ftcdn.net/jpg/03/24/12/83/500_F_324128389_f7dWYMBeMDT2uFsymos0S90KfUtQ0gRW.jpg",
        "photo4" => "https://i.pinimg.com/474x/be/a7/b0/bea7b0eaaecb59672c8ccd9d0de86123.jpg"
    ];
    $certyficates =[
        "Certyfikat 1" => "https://png.pngtree.com/png-clipart/20190630/original/pngtree-img-file-document-icon-png-image_4165020.jpg",
        "Certyfikat 2" => "https://png.pngtree.com/png-clipart/20190630/original/pngtree-img-file-document-icon-png-image_4165020.jpg",
        "Certyfikat 3" => "https://png.pngtree.com/png-clipart/20190630/original/pngtree-img-file-document-icon-png-image_4165020.jpg",
        "Certyfikat 4" => "https://png.pngtree.com/png-clipart/20190630/original/pngtree-img-file-document-icon-png-image_4165020.jpg"
    ];
    return view('trainer_page',[
        'disciplines' => $disciplines,
        'photos' => $photos,
        'certyficates' => $certyficates
    ]);
});

/*  Route::group([
    'middleware' => 'roles',
    'roles' => 'Trainer'
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


Route::get('/user-dashboard', 'User\UserDashboardController@index')->name('user_dashboard');
Route::get('user/{id}', 'User\UserController@show');

Route::get('/search', 'User\UserController@search');
