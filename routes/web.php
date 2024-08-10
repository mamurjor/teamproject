<?php

use App\Http\Controllers\contactController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

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



Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

Route::get('/form',[DashboardController::class,'form'])->name('form');


Route::get('/register',[DashboardController::class,'register'])->name('register');

Route::post('contact',[contactController::class,'contact'])->name('contact');



Route::get('empform',[DashboardController::class,'saveform'])->name('saveform');


Route::post('gradesave',[DashboardController::class,'gradesave'])->name('gradesave');
