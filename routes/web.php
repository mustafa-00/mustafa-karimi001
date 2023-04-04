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
Route::group(['prefix' => 'admin' , 'middleware' => 'auth'], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('admin');
    Route::resource('about', AboutController::class);
    Route::get('contact', [ContactController::class, 'index']);
    Route::resource('post',PostController::class);
});

//auth section route--------
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login/user', [LoginController::class, 'login'])->name('login.user');
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register/user', [RegisterController::class, 'register'])->name('register.user');

//Landing section routes-------
Route::get('/', [LandingController::class, 'index']);

