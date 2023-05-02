<?php

use App\Http\Controllers\admin\about\AboutUsController;
use App\Http\Controllers\admin\about\QuestionController;
use App\Http\Controllers\admin\about\Team_membersConroller;
use App\Http\Controllers\admin\about\TestimonialController;
use App\Http\Controllers\admin\contact\ContactController;
use App\Http\Controllers\admin\home\ActionController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\services\FeaturedController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\pricing\PricingController;
use App\Http\Controllers\admin\services\OurServicesController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\landing\LandingController;
use Illuminate\Foundation\Console\AboutCommand;
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
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('admin');
    Route::resource('about', AboutUsController::class);
    Route::resource('question', QuestionController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('team_members', Team_membersConroller::class);
    Route::resource('contact', ContactController::class);
    Route::resource('post',PostController::class);
    Route::resource('featured',FeaturedController::class);
    Route::resource('OurServices',OurServicesController::class);
    Route::resource('Action',ActionController::class);
    Route::resource('Pricing',PricingController::class);
    Route::resource('Contact',ContactController::class);

});

//auth section route--------
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('register/user', [RegisterController::class, 'register'])->name('register.user');
Route::post('login/user', [LoginController::class, 'login'])->name('login.user');
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');


//Landing section routes-------
Route::get('/', [LandingController::class, 'index']);
Route::get('home', [LandingController::class, 'index'])->name('home');
Route::get('about', [LandingController::class, 'about'])->name('about');
Route::get('services', [LandingController::class, 'services'])->name('services');
Route::get('pricing', [LandingController::class, 'pricing'])->name('pricing');
Route::get('contact', [LandingController::class, 'contact'])->name('contact');


