<?php

use App\Http\Controllers\homeController;
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

//home dashboard
Route::get('/home',[homeController::class,'home'])->name('dash.home');

//view seat plan
Route::get('/busSeat',[homeController::class,'viewBusSeat'])->name('bus.seat');

Route::post('/seat',[homeController::class,'seat'])->name('bus');



Route::get('/sample',[homeController::class,'sample']);

//show all available trip
Route::get('/showTrip',[homeController::class,'showTrip'])->name('trip.show');
//show creat Trip page
Route::get('/trip',[homeController::class,'showTripForm'])->name('trip.form');
//store new trip
Route::post('/trip/store',[homeController::class,'storeTrip'])->name('trip.store');

//ticket store
Route::post('/ticket/store',[homeController::class,'storeTicket'])->name('ticket.store');

//Show Login
Route::get('/login',[homeController::class,'login'])->name('login.show');
//login function
Route::post('/loginFunction',[homeController::class,'loginFunction'])->name('login.function');

//logout
Route::get('/loginFunction',[homeController::class,'logout'])->name('logout.function');

//view sold ticket table
Route::get('/viewSoldTicket',[homeController::class,'viewSoldTicket'])->name('view.sold');
