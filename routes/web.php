<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\SkillController;
use App\Http\Controllers\backend\PortfolioController;
use App\Http\Controllers\backend\BlogController;

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
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [\App\Http\Controllers\FrontendController::class, 'index'])->name('frontend.index');
Route::get('about', [\App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('skill', [\App\Http\Controllers\FrontendController::class, 'skill'])->name('skill');
Route::get('portfolio', [\App\Http\Controllers\FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('blog', [\App\Http\Controllers\FrontendController::class, 'blog'])->name('blog');
Route::get('showblog\{id}', [\App\Http\Controllers\FrontendController::class, 'showblog'])->name('showblog');
Route::get('contact', [\App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('profile', [UserController::class, 'create'])->name('user.create');
Route::post('profile-save', [UserController::class, 'store'])->name('user.store');
Route::put('profile-update/{id}', [UserController::class, 'update'])->name('user.update');



Route::get('skill-create', [SkillController::class, 'create'])->name('skill.create');
Route::post('skill-store', [SkillController::class, 'store'])->name('skill.store');
Route::get('skill-index', [SkillController::class, 'index'])->name('skill.index');
Route::get('skill-view/{id}', [SkillController::class, 'show'])->name('skill.show');
Route::get('skill-edit/{id}', [SkillController::class, 'edit'])->name('skill.edit');
Route::put('skill-update/{id}', [SkillController::class, 'update'])->name('skill.update');
Route::delete('skill-destroy/{id}', [SkillController::class, 'destroy'])->name('skill.destroy');

Route::get('portfolio-create', [PortfolioController::class, 'create'])->name('portfolio.create');
Route::post('portfolio-store', [PortfolioController::class, 'store'])->name('portfolio.store');
Route::get('portfolio-index', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('portfolio-view/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');
Route::get('portfolio-edit/{id}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
Route::put('portfolio-update/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
Route::delete('portfolio-destroy/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');


Route::get('blog-create', [BlogController::class, 'create'])->name('blog.create');
Route::post('blog-store', [BlogController::class, 'store'])->name('blog.store');
Route::get('blog-index', [BlogController::class, 'index'])->name('blog.index');
Route::get('blog-show/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('blog-edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('blog-update/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('blog-delete/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');




