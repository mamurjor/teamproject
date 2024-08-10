<?php

use App\Http\Controllers\contactController;
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

 Route::get('allwebsitedata',[DashboardController::class,'listofwebistedata'])->name('listofwebistedata');

Route::get('/',[WebsiteController::class,'FullWebsiteData'])->name('full_website_controll');



Route::get('/practice',[PracticeDatabaseController::class,'data_show_from_database'])->name('data_show_from_database');
Route::get('/expertiselist',[PracticeDatabaseController::class,'expertiselist'])->name('expertiselist');

Route::get('/heroform',[PracticeDatabaseController::class,'heroform'])->name('heroform');
