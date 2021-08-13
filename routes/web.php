<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TagController;
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

Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/categories/{category_id}', [NewsController::class, 'category'])->name('category_page');
Route::get('/categories/{tags_id}', [NewsController::class, 'news'])->name('tags_page');
Route::get('/news/{news_id}', [TagController::class, 'news'])->name('news_page');
Route::get('/news', 'App\Http\Controllers\NewsController@news')->name('news');
Route::get('/', 'App\Http\Controllers\CategoryController@home')->name('home');
