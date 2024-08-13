<?php

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
    return view('welcome');
});


//dashboard Start
Route::get('/mydashboard','dashboarController@mydashboard')->name('mydashboard');
Route::get('/form','dashboarController@form');
Route::get('/register','dashboarController@register');

// expertise

Route::get('/expertiselist','ExpertiseController@index');
Route::get('/addexpertise','ExpertiseController@addexpertise');
Route::post('/saveexpertise','ExpertiseController@saveexpertise');
//Route::post('/saveexpertise','ExpertiseController@saveexpertise');

//hero

Route::get('/herolist','HeroController@index');
Route::get('/addhero','HeroController@addhero');
Route::post('/savehero','HeroController@savehero');

//Education

Route::get('/educationlist','EducationController@index');
Route::get('/addeducation','EducationController@addeducation');
Route::post('/saveeducation','EducationController@saveeducation');
Route::get('/editeducation/{id}','EducationController@editeducation');