<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\HeroAreaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\settingController;
use App\Http\Controllers\skillController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Auth;
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

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/verify-email', [ProfileController::class, 'verifyEmail'])->name('verifyEmail');


Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

Route::get('/contact',[contactController::class,'index'])->name('contact');

Route::get('/portfolio',[PortfolioController::class,'portfolio'])->name('portfolio');

//hero area
Route::get('/hero', [HeroAreaController::class, 'hero'])->name('hero');
Route::post('/hero', [HeroAreaController::class, 'store'])->name('hero.store');
Route::get('/hero/edit', [HeroAreaController::class, 'edit'])->name('heroEdit');
Route::put('/hero/update', [HeroAreaController::class, 'update'])->name('heroUpdate');

// About
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/about/create', [AboutController::class, 'create'])->name('about.create');
Route::post('/about', [AboutController::class, 'store'])->name('about.store');
Route::get('/about/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
Route::put('/about/{id}', [AboutController::class, 'update'])->name('about.update');
Route::get('/about/{id}', [AboutController::class, 'show'])->name('about.show');

// Portfolio
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
Route::post('/portfolio', [PortfolioController::class, 'store'])->name('portfolio.store');
Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
Route::put('/portfolio/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');

// Resume
Route::get('/resume', [ResumeController::class, 'index'])->name('resume');
Route::get('/resume/create', [ResumeController::class, 'create'])->name('resume.create');
Route::post('/resume', [ResumeController::class, 'store'])->name('resume.store');
Route::get('/resume/{id}/edit', [ResumeController::class, 'edit'])->name('resume.edit');
Route::put('/resume/{id}', [ResumeController::class, 'update'])->name('resume.update');
Route::get('/resume/{id}', [ResumeController::class, 'show'])->name('resume.show');

// Counter
Route::get('/counter', [CounterController::class, 'index'])->name('counter');
Route::get('/counter/create', [CounterController::class, 'create'])->name('counter.create');
Route::post('/counter', [CounterController::class, 'store'])->name('counter.store');
Route::get('/counter/{id}/edit', [CounterController::class, 'edit'])->name('counter.edit');
Route::put('/counter/{id}', [CounterController::class, 'update'])->name('counter.update');
Route::get('/counter/{id}', [CounterController::class, 'show'])->name('counter.show');

// Package
Route::get('/package', [PackageController::class, 'index'])->name('package');
Route::get('/package/create', [PackageController::class, 'create'])->name('package.create');
Route::post('/package', [PackageController::class, 'store'])->name('package.store');
Route::get('/package/{id}/edit', [PackageController::class, 'edit'])->name('package.edit');
Route::put('/package/{id}', [PackageController::class, 'update'])->name('package.update');
Route::get('/package/{id}', [PackageController::class, 'show'])->name('package.show');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/blog/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

// Service
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
Route::post('/service', [ServiceController::class, 'store'])->name('service.store');
Route::get('/service/{id}/edit', [ServiceController::class, 'edit'])->name('service.edit');
Route::put('/service/{id}', [ServiceController::class, 'update'])->name('service.update');
Route::get('/service/{id}', [ServiceController::class, 'show'])->name('service.show');

// Setting
Route::get('/setting', [SettingController::class, 'index'])->name('setting');
Route::get('/setting/create', [SettingController::class, 'create'])->name('setting.create');
Route::post('/setting', [SettingController::class, 'store'])->name('setting.store');
Route::get('/setting/{id}/edit', [SettingController::class, 'edit'])->name('setting.edit');
Route::put('/setting/{id}', [SettingController::class, 'update'])->name('setting.update');
Route::get('/setting/{id}', [SettingController::class, 'show'])->name('setting.show');

// Skill
Route::get('/skill', [SkillController::class, 'index'])->name('skill');
Route::get('/skill/create', [SkillController::class, 'create'])->name('skill.create');
Route::post('/skill', [SkillController::class, 'store'])->name('skill.store');
Route::get('/skill/{id}/edit', [SkillController::class, 'edit'])->name('skill.edit');
Route::put('/skill/{id}', [SkillController::class, 'update'])->name('skill.update');
Route::get('/skill/{id}', [SkillController::class, 'show'])->name('skill.show');






});

require __DIR__.'/auth.php';
