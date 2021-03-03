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

Route::group(['middleware' => 'auth'], function(){
    Route::get('/create_book', [App\Http\Controllers\BookController::class, 'create'])->name('create_book');
    Route::get('/all_books', [App\Http\Controllers\BookController::class, 'index'])->name('all_books');
    Route::get('/my_books', [App\Http\Controllers\BookController::class, 'my_books'])->name('my_books');
    Route::get('/edit_book/{id}', [App\Http\Controllers\BookController::class, 'edit'])->name('edit_book');
    Route::get('/view_book/{id}', [App\Http\Controllers\BookController::class, 'show'])->name('view_book');
});