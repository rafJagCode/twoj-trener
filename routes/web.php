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

Route::get('trainer_dashboard', function () {
    $userName = 'John';
    $cities = [
        'Warszawa',
        'Olsztyn',
        'Kraków',
        'Poznań'
    ];
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
        "photo1" => "http://4.bp.blogspot.com/-fmWvJFVZZxI/Uc5iK_5EKfI/AAAAAAAAEbs/2Qt7I-XNHwc/s550/nature+photography+(1).jpg",
        "photo2" => "http://3.bp.blogspot.com/-s89PXSoX9hw/Uc5iVGHzy6I/AAAAAAAAEdA/hOrjxoc9cRA/s550/nature+photography+(2).jpg",
        "photo3" => "http://2.bp.blogspot.com/-gK83D-ZxrAA/Uc5iVP_hJJI/AAAAAAAAEc8/omD_Y_U8TdQ/s550/nature+photography+(3).jpg",
        "photo4" => "https://picsum.photos/3000"
    ];
    $description = "Opis trenera";
    return view('trainer_dashboard.trainer_dashboard',[
        'userName' => $userName,
        'cities' => $cities,
        'disciplines' => $disciplines,
        'photos' => $photos,
        'description' => $description
    ]);
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
    return view('trainer_page.trainer_page',[
        'disciplines' => $disciplines,
        'photos' => $photos,
        'certyficates' => $certyficates
    ]);
});

Route::get('/registration', function () {
    return view('registration');
});

