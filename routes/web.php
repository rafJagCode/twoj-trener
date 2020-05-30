<?php

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

Route::get('/trainer_dashboard', function () {
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
    $photos = [
        "photo1" => "http://4.bp.blogspot.com/-fmWvJFVZZxI/Uc5iK_5EKfI/AAAAAAAAEbs/2Qt7I-XNHwc/s550/nature+photography+(1).jpg",
        "photo2" => "http://3.bp.blogspot.com/-s89PXSoX9hw/Uc5iVGHzy6I/AAAAAAAAEdA/hOrjxoc9cRA/s550/nature+photography+(2).jpg",
        "photo3" => "http://2.bp.blogspot.com/-gK83D-ZxrAA/Uc5iVP_hJJI/AAAAAAAAEc8/omD_Y_U8TdQ/s550/nature+photography+(3).jpg",
        "photo4" => "https://picsum.photos/3000"
    ];
    $description = "Opis trenera";
    return view('trainer_dashboard',[
        'userName' => $userName,
        'cities' => $cities,
        'disciplines' => $disciplines,
        'photos' => $photos,
        'description' => $description
    ]);
});


Route::get('/registration', function () {
    return view('registration');
});

