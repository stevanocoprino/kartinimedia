<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ArticleController;

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

// Home
Route::get('/', [HomepageController::class, 'index']);
// Route::get('/category', [ArticleController::class, 'category']);
Route::get('/single', [ArticleController::class, 'single']);
Route::get('/{category}', [ArticleController::class, 'category']);
Route::get('/{category}/{slug}', [ArticleController::class, 'detail']);