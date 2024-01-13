<?php

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


use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeAffiliateController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;            
use App\Http\Controllers\UserController;            


Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::get('/customer', [HomeController::class, 'index'])->name('customer');
Route::get('/affiliate', [HomeAffiliateController::class, 'index'])->name('affiliate');
Route::get('/admin', [HomeAdminController::class, 'index'])->name('admin');
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
Route::post('/register', [RegisterController::class, 'store'])->name('register.perform');
Route::post('/users', [UserController::class, 'index'])->name('users');


//Route::get('/', function () {return redirect('/dashboard');})->middleware('auth');
Route::group(['middleware' => 'guest'], function () {
	//Route::post('/register', [RegisterController::class, 'store'])->name('register.perform');
	// Route::get('/login', [LoginController::class, 'show'])->name('login');
	// Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
	Route::get('/reset-password', [ResetPassword::class, 'show'])->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->name('change.perform');
	
});
Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');

	
Route::group(['middleware' => 'auth'], function () {
	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static'); 
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static'); 
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});