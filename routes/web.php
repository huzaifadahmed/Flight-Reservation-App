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

/**
 * TODO: clean up your routes file. Use consistency.
 * If your route only does one thing, create an invokeable controller for it
 * instead of an anonymous function like the one below for the home view.
 * Consistency is key.
 */

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/bookflight', function () {
    return view('bookflight');
});

Route::get('/search', [FlightController::class,'index']);

// TODO: you can change this to just /flight/{flight}, and then
// type-hint the Flight model on the "show" method like you have.
// e.g. show(Flight $flight). It's more expressive rather than calling it $id.
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



