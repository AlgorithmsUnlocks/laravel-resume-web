<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;

/*
 * Pages route manage
 * Home, Resume, Portfolio, Blog, Contact
 */

Route::get('/',[HomeController::class,'page']);
Route::get('/resume',[ResumeController::class,'page']);
Route::get('/portfolio',[PortfolioController::class,'page']);
Route::get('/blog',[BlogController::class,'page']);
Route::get('/contact',[ContactController::class,'page']);

/*
 * Ajax call routes for all pages
 */
Route::get('/heroResume',[HomeController::class,'heroResume']);
Route::get('/educationResume',[HomeController::class,'educationResume']);
Route::get('/experienceResume',[HomeController::class,'experienceResume']);
Route::get('/serviceResume',[HomeController::class,'serviceResume']);
Route::get('/reviewsResume',[HomeController::class,'reviewsResume']);

Route::get('/clientsResume',[ResumeController::class,'clientsResume']);
Route::get('/achievementsResume',[ResumeController::class,'achievementsResume']);

Route::get('/portfolioResume',[PortfolioController::class,'portfolioResume']);

Route::get('/profileResume',[ProfileController::class,'profileResume']);
Route::get('/socialsResume',[ProfileController::class,'socialsResume']);
Route::get('/interestResume',[ProfileController::class,'interestResume']);
Route::get('/languageResume',[ProfileController::class,'languageResume']);

Route::get('/blogResume',[BlogController::class,'blogResume']);

Route::get('/contact_infoResume',[ContactController::class,'contact_infoResume']);
Route::post('/contact_formsResume',[ContactController::class,'contact_formsResume']);
Route::get('/locationResume',[ContactController::class,'locationResume']);
