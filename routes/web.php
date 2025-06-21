<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/movies/{id}', [MainController::class, 'movies'])->name('movies');
Route::get('/movies/{id}/{movieId}', [MainController::class, 'movieDetails'])->name('movieDetails');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
Route::post('/contacts', [MainController::class, 'sendFeedback'])->name('sendFeedback');

Route::get('/reviews', [MainController::class, 'reviews'])->name('reviews');
Route::post('/reviews', [MainController::class, 'postReview'])->name('postReview');

Route::resource('admin/categories', CategoryController::class);