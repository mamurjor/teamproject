<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\PracticeDatabaseController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('allwebsitedata',[DashboardController::class,'listofwebistedata'])->name('listofwebistedata');

Route::get('/',[WebsiteController::class,'full_website_controll'])->name('full_website_controll');

Route::get('/dashboard',[DashboardController::class,'dashboard_all_data'])->name('dashboard_all_data');

Route::get('/practice',[PracticeDatabaseController::class,'data_show_from_database'])->name('data_show_from_database');
