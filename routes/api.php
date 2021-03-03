<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware'=>['auth:api']], function(){
    Route::post('/create_book', [App\Http\Controllers\BookController::class, 'store']);
    Route::post('/edit_book/{id}', [App\Http\Controllers\BookController::class, 'update']);
    Route::post('/archive_book/{id}', [App\Http\Controllers\BookController::class, 'softDestroy']);
    Route::post('/delete_book/{id}', [App\Http\Controllers\BookController::class, 'destroy']);
});
