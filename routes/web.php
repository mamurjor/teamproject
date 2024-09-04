<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\FormController;




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

Route::get('/',[WebsiteController::class,'fullWebsiteData'])->name('fullWebsiteData');
Route::post('/dashboard',[DashboardController::class,'dashboardAllData'])->name('dashboardAllData');



//All list route start

Route::get('/herolist',[ListController::class,'herolist'])->name('herolist');
Route::get('/expertiselist',[ListController::class,'expertiselist'])->name('expertiselist');
Route::get('/educationlist',[ListController::class,'educationlist'])->name('educationlist');
Route::get('/personDetailsList',[ListController::class,'personDetailsList'])->name('personDetailsList');

//all list route end


//All form route start

Route::get('/heroform',[FormController::class,'heroform'])->name('heroform');
Route::get('/expertiseform',[FormController::class,'expertiseform'])->name('expertiseform');
Route::get('/educationform',[FormController::class,'educationform'])->name('educationform');
Route::get('/personDetailsForm',[FormController::class,'personDetailsForm'])->name('personDetailsForm');

//all form route end


//all form data catch route start
Route::post('/heroFormDataCatch',[ListController::class,'heroFormDataCatch'])->name('heroFormDataCatch');
Route::post('/expertiseFormDataCatch',[ListController::class,'expertiseFormDataCatch'])->name('expertiseFormDataCatch');

//all form date catch route end





Auth::routes(['verify'=>true]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
