<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FlightController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/swap',[HomeController::class,'swap'])->name('swap');

Route::get('/flight/search', [HomeController::class, 'showSearchForm'])->name('flight.search');
Route::post('/flight/search', [HomeController::class, 'search']);
Route::get('/flight/result', [HomeController::class, 'showResult'])->name('flight.result');
