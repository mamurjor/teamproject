<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WellcomeController;

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


Route::get('/welcome',[WellcomeController::class,'welcome'])->name('welcome');
Route::get('/allwebsitedata',[DashboardController::class,'listofwebistedata'])->name('listofwebistedata');
Route::get('/empform',[DashboardController::class,'saveform'])->name('saveform');


Route::post('/gradesave',[DashboardController::class,'gradesave'])->name('gradesave');
