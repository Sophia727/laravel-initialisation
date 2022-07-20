<?php

use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'home'])->name('home');
Route::get('/about', [PostController::class, 'about'])->name('about');
Route::get('/articles', [PostController::class, 'articles'])->name('articles');
Route::get('/contact', [PostController::class, 'contact'])->name('contact');
Route::get('/display/{id}',[PostController::class, 'useId']);