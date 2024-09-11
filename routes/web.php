<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ResumeEducationController;
use App\Http\Controllers\PacksPricingController;
use App\Http\Controllers\FontentController;





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

// resourse route start

Route::resource('education',ResumeEducationController::class);
Route::resource('packspricing',PacksPricingController::class);

// resourse route end


// Login registration auth route start

Auth::routes(['verify'=>true]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// Login registration auth route end



// Fontent route --------------

Route::get('/',[FontentController::class,'fontent'])->name('fontent');

// Fontent route --------------


//All hero  route start

Route::get('/herolist',[ListController::class,'herolist'])->name('herolist');
Route::get('/heroform',[FormController::class,'heroform'])->name('heroform');
Route::post('/herostore',[ListController::class,'herostore'])->name('herostore');
Route::get('/heroedit/{hero}',[ListController::class,'heroedit'])->name('heroedit');
Route::put('/heroupdate/{hero}',[ListController::class,'heroupdate'])->name('heroupdate');
Route::delete('/herodelete/{hero}',[ListController::class,'herodelete'])->name('herodelete');
Route::get('/heroshow/{hero}',[ListController::class,'heroshow'])->name('heroshow');

//All hero  route end

//All about person details route  route start

Route::get('/personDetailsList',[ListController::class,'personDetailsList'])->name('personDetailsList');
Route::get('/personDetailsForm',[ListController::class,'personDetailsForm'])->name('personDetailsForm');
Route::post('/personDetailsStore',[ListController::class,'personDetailsStore'])->name('personDetailsStore');
Route::get('/persondetsedit/{aboutperdets}',[ListController::class,'persondetsedit'])->name('persondetsedit');
Route::put('/persondetsupdate/{aboutperdets}',[ListController::class,'persondetsupdate'])->name('persondetsupdate');
Route::delete('/persondetsdelete/{aboutperdets}',[ListController::class,'persondetsdelete'])->name('persondetsdelete');
Route::get('/persondetsshow/{aboutperdets}',[ListController::class,'persondetsshow'])->name('persondetsshow');


//All about person details route  route end

//All about person infos route  route start

Route::get('/personinfoslist',[ListController::class,'personinfoslist'])->name('personinfoslist');
Route::get('/personinfosform',[ListController::class,'personinfosform'])->name('personinfosform');
Route::post('/personinfosstore',[ListController::class,'personinfosstore'])->name('personinfosstore');
Route::get('/personinfosedit/{aboutperInfos}',[ListController::class,'personinfosedit'])->name('personinfosedit');
Route::put('/personinfosupdate/{aboutperInfos}',[ListController::class,'personinfosupdate'])->name('personinfosupdate');
Route::delete('/personinfssdelete/{aboutperInfos}',[ListController::class,'personinfssdelete'])->name('personinfssdelete');
Route::get('/personinfosshow/{aboutperInfos}',[ListController::class,'personinfosshow'])->name('personinfosshow');


//All about person infos route  route end

//All about expertise route start
Route::get('/aboutexpertiselist',[ListController::class,'aboutexpertiselist'])->name('aboutexpertiselist');
Route::get('/aboutexpertiseform',[ListController::class,'aboutexpertiseform'])->name('aboutexpertiseform');
Route::post('/aboutexpertsestore',[ListController::class,'aboutexpertsestore'])->name('aboutexpertsestore');
Route::get('/aboutexpertseedit/{aboutexpertise}',[ListController::class,'aboutexpertseedit'])->name('aboutexpertseedit');
Route::put('/aboutexpertiseupdate/{aboutexpertise}',[ListController::class,'aboutexpertiseupdate'])->name('aboutexpertiseupdate');
Route::delete('/aboutexpertisedelete/{aboutexpertise}',[ListController::class,'aboutexpertisedelete'])->name('aboutexpertisedelete');
Route::get('/aboutexpertiseshow/{aboutexpertise}',[ListController::class,'aboutexpertiseshow'])->name('aboutexpertiseshow');



//All about expertise route  route end---------end



//All resume expertise route  route ---------start


Route::get('/expertiselist',[ListController::class,'expertiselist'])->name('expertiselist');
Route::get('/expertiseform',[FormController::class,'expertiseform'])->name('expertiseform');
Route::post('/expertisestore',[ListController::class,'expertisestore'])->name('expertisestore');
Route::get('/expertiseedit/{resumeexpertise}',[ListController::class,'expertiseedit'])->name('expertiseedit');
Route::put('/expertiseupdate/{resumeexpertise}',[ListController::class,'expertiseupdate'])->name('expertiseupdate');
Route::delete('/expertisedelete/{resumeexpertise}',[ListController::class,'expertisedelete'])->name('expertisedelete');
Route::get('/expertiseshow/{resumeexpertise}',[ListController::class,'expertiseshow'])->name('expertiseshow');

//All resume expertise route  route ------------end

//All resume skill route  route ------------start

Route::get('/skilllist',[ListController::class,'skilllist'])->name('skilllist');
Route::get('/skillform',[ListController::class,'skillform'])->name('skillform');
Route::post('/skillstore',[ListController::class,'skillstore'])->name('skillstore');
Route::get('/skilledit/{skill}',[ListController::class,'skilledit'])->name('skilledit');
Route::put('/skillupdate/{skill}',[ListController::class,'skillupdate'])->name('skillupdate');
Route::delete('/skilldelete/{skill}',[ListController::class,'skilldelete'])->name('skilldelete');
Route::get('/skillshow/{skill}',[ListController::class,'skillshow'])->name('skillshow');

//All resume skill route  route ------------end



//all list route end

Route::get('/counterlist',[ListController::class,'counterlist'])->name('counterlist');
Route::get('/counterform',[ListController::class,'counterform'])->name('counterform');
Route::post('/counterstore',[ListController::class,'counterstore'])->name('counterstore');
Route::get('/counteredit/{counter}',[ListController::class,'counteredit'])->name('counteredit');
Route::put('/counterupdate/{counter}',[ListController::class,'counterupdate'])->name('counterupdate');
Route::delete('/counterdelete/{counter}',[ListController::class,'counterdelete'])->name('counterdelete');
Route::get('/countershow/{counter}',[ListController::class,'countershow'])->name('countershow');



//All form route start

Route::get('/servicelist',[ListController::class,'servicelist'])->name('servicelist');
Route::get('/serviceform',[ListController::class,'serviceform'])->name('serviceform');
Route::post('/servicestore',[ListController::class,'servicestore'])->name('servicestore');
Route::get('/serviceedit/{service}',[ListController::class,'serviceedit'])->name('serviceedit');
Route::put('/serviceupdate/{service}',[ListController::class,'serviceupdate'])->name('serviceupdate');
Route::delete('/servicedelete/{service}',[ListController::class,'servicedelete'])->name('servicedelete');
Route::get('/serviceshow/{service}',[ListController::class,'serviceshow'])->name('serviceshow');



//all call to action  route start
Route::get('/calltoactionlist',[ListController::class,'calltoactionlist'])->name('calltoactionlist');
Route::get('/calltoactionform',[ListController::class,'calltoactionform'])->name('calltoactionform');
Route::post('/calltoactionstore',[ListController::class,'calltoactionstore'])->name('calltoactionstore');
Route::get('/calltoactionedit/{calltoaction}',[ListController::class,'calltoactionedit'])->name('calltoactionedit');
Route::put('/calltoactionupdate/{calltoaction}',[ListController::class,'calltoactionupdate'])->name('calltoactionupdate');
Route::delete('/calltoactiondelete/{calltoaction}',[ListController::class,'calltoactiondelete'])->name('calltoactiondelete');
Route::get('/calltoactionshow/{calltoaction}',[ListController::class,'calltoactionshow'])->name('calltoactionshow');


//all call to action route end

//all post  route start ----------------------------------start
Route::get('/postlist',[ListController::class,'postlist'])->name('postlist');
Route::get('/postform',[ListController::class,'postform'])->name('postform');
Route::post('/poststore',[ListController::class,'poststore'])->name('poststore');
Route::get('/postedit/{post}',[ListController::class,'postedit'])->name('postedit');
Route::put('/postupdate/{post}',[ListController::class,'postupdate'])->name('postupdate');
Route::delete('/postdelete/{post}',[ListController::class,'postdelete'])->name('postdelete');
Route::get('/postshow/{post}',[ListController::class,'postshow'])->name('postshow');
//all post  route end ----------------------------------end



Route::get('/categorylist',[ListController::class,'categorylist'])->name('categorylist');
Route::get('/categoryform',[ListController::class,'categoryform'])->name('categoryform');
Route::post('/categorystore',[ListController::class,'categorystore'])->name('categorystore');
Route::get('/categoryedit/{category}',[ListController::class,'categoryedit'])->name('categoryedit');
Route::put('/categoryupdate/{category}',[ListController::class,'categoryupdate'])->name('categoryupdate');
Route::delete('/categorydelete/{category}',[ListController::class,'categorydelete'])->name('categorydelete');
Route::get('/categoryshow/{category}',[ListController::class,'categoryshow'])->name('categoryshow');






