<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});


//admin section routes------
Route::group(['prefix' => 'admin'], function(){
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('about', [AboutController::class, 'index']);
    Route::get('contact', [ContactController::class, 'index']);
});

//auth section route--------
Route::get('login', [LoginController::class, 'index']);
Route::get('register', [RegisterController::class, 'index']);

