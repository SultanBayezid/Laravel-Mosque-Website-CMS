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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile-list');
Route::put('/profile/update/{id}', [App\Http\Controllers\HomeController::class, 'profileUpdate'])->name('profile-update');
Route::get('/', [App\Http\Controllers\FrontendController::class, 'home'])->name('frontend-home');
Route::get('/service', [App\Http\Controllers\FrontendController::class, 'service'])->name('frontend-service');
Route::get('/news', [App\Http\Controllers\FrontendController::class, 'news'])->name('frontend-news');
Route::get('/news/show/{id}', [App\Http\Controllers\FrontendController::class, 'newsShow'])->name('frontend-news-show');
Route::get('/donate', [App\Http\Controllers\FrontendController::class, 'donate'])->name('frontend-donate');
Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('frontend-contact');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::resource('news', App\Http\Controllers\NewsController::class);
    Route::resource('prayer-time', App\Http\Controllers\PrayerTimeController::class);
    Route::resource('jamattime', App\Http\Controllers\JamatTimeController::class);
    Route::resource('announcement', App\Http\Controllers\AnnouncementController::class);
    Route::resource('slider', App\Http\Controllers\SliderController::class);

});

Route::get('/dasboard',[App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
