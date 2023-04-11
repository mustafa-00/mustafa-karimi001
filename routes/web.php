<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\landing\LandingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



//admin section routes------
Route::group(['prefix' => 'admin'], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('admin');
    Route::resource('about', AboutController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('post',PostController::class);
});

//auth section route--------
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('register/user', [RegisterController::class, 'register'])->name('register.user');
Route::post('login/user', [LoginController::class, 'login'])->name('login.user');


//Landing section routes-------
Route::get('/', [LandingController::class, 'index']);
Route::get('home', [LandingController::class, 'index'])->name('home');
Route::get('about', [LandingController::class, 'about'])->name('about');
Route::get('services', [LandingController::class, 'services'])->name('services');
Route::get('pricing', [LandingController::class, 'pricing'])->name('pricing');
Route::get('contact', [LandingController::class, 'contact'])->name('contact');


