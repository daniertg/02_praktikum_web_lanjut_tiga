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
    return "Halaman Awal Website";
});
Route::get('/home', function () {
    return "Halaman Awal Website";
});
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        // Matches The "/admin/users" URL//
       
       echo"https://www.educastudio.com/category/marbel-edu-games";
       
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        // Matches The "/admin/users" URL//
       
       echo"https://www.educastudio.com/category/marbel-and-friends-kids-games";
       
    });
    Route::get('/riri-story-books', function () {
        // Matches The "/admin/users" URL//
       
       echo"https://www.educastudio.com/category/riri-story-books";
       
    });
    Route::get('/kolak-kids-songs', function () {
        // Matches The "/admin/users" URL//
       
       echo"https://www.educastudio.com/category/kolak-kids-songs";
       
    });
    
});
Route::get('/news{link?}', function (string $link = null) {
    return "https://www.educastudio.com/news";
});
 
Route::get('/news/{link?}', function (string $link = 'educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19') {
    return "educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19";
});

Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        // Matches The "/admin/users" URL//
       
       echo"https://www.educastudio.com/program/karir";
       
    });
    Route::get('/magang', function () {
        // Matches The "/admin/users" URL//
       
       echo"https://www.educastudio.com/program/magang";
       
    });
    Route::get('/kunjungan-industri', function () {
        // Matches The "/admin/users" URL//
       
       echo"https://www.educastudio.com/program/kunjungan-industri";
       
    });
    
});

Route::get('/about-us', function () {
    return "https://www.educastudio.com/about-us";
});
Route::resource('contact-us',ContactController::class)->only([
    'show'
]);

