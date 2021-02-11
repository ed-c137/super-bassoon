<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/book/', 'App\Http\Controllers\BookController@index');
Auth::routes();
//  Route::middleware('auth:sanctum')->get('/api/book/', 'App\Http\Controllers\BookController@index');
//or
// Route::get('/api/book/', [BookController::class, 'index']);


