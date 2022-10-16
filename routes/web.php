<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;


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
    return view('home');
})->name('home');

Route::get('/bookflight', function () {
    return view('bookflight');
});

Route::get('/search', [FlightController::class,'index']);

Route::get('/flight/{id:flightNumber}', [FlightController::class,'show']);

Route::get('/confirm', [Passengercontroller::class,'index']);

Route::get('/reservationsearch', [Passengercontroller::class,'show'])->name('reservationsearch');


//Payment routes
Route::post('/checkout',[StripeController::class,'checkout'])->name('checkout');
Route::get('/success',[StripeController::class,'success'])->name('success');

//Login
Route::get('/adminlogin',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'store']);
Route::post('/logout',[LoginController::class,'destroy']);

//admin
Route::get('/dashboard',[AdminController::class,'index'])->middleware('auth');
Route::post('/createflight',[AdminController::class,'create'])->middleware('auth');



