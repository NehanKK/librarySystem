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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/books', [App\Http\Controllers\BookController::class, 'index'])->middleware(['auth']);
Route::get('/borrow-book/{id}', [App\Http\Controllers\BookController::class, 'borrow'])->middleware(['auth']);
Route::get('/borrowed-Books', [App\Http\Controllers\BookController::class, 'borrowedview'])->middleware(['auth']);
Route::get('/return-book/{id}', [App\Http\Controllers\BookController::class, 'return'])->middleware(['auth']);
