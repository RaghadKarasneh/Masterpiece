<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ExperienceCommentsController;
use App\Http\Controllers\ExperienceRepliesController;
use App\Http\Controllers\ExperiencesController;
use App\Models\ExperienceComments;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[UserController::class,'homePageView']);
Route::get('img/logo',[UserController::class,'imgView'])->name('img.displayImage');
Route::get('/blog',[BlogsController::class,'blogView']);
Route::get('/experiences',[UserController::class,'experiencesView']);
Route::get('/contact',[UserController::class,'contactView']);
Route::get('/portfolio',[UserController::class,'portfolioView']);
Route::get('/blog-post',[UserController::class,'blogPostView']);
Route::get('/jobs',[UserController::class,'jobsView']);
Route::get('/centers&clinics',[UserController::class,'centers_clinicsView']);
Route::get('/motivation',[UserController::class,'motivationView']);
Route::get('/shop',[UserController::class,'shopView']);
Route::get('/cart',[UserController::class,'cartView']);
Route::get('/checkout',[UserController::class,'checkoutView']);
Route::get('/bill',[UserController::class,'billView']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('home');
Route::get('/experiences',[ExperiencesController::class,'index'])->name('experiences');
Route::get('/comments',[ExperienceCommentsController::class,'store'])->name('comments.store');
Route::get('/replies',[ExperienceRepliesController::class,'store']);
Route::get('/delete_comments/{id}',[ExperienceCommentsController::class,'destroy']);
Route::get('/delete_replies/{id}',[ExperienceRepliesController::class,'destroy']);