<?php

use Illuminate\Support\Facades\Route;
use App\Models\Type;

/*
|--------------------------------------------------------------------------
| Web Routesj
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\StockController@index');

Route::resource('types', 'App\Http\Controllers\TypeController');
Route::resource('users', 'App\Http\Controllers\UserController');
Route::resource('stocks', 'App\Http\Controllers\StockController');

Route::get('login', 'App\Http\Controllers\AuthController@getAuth')->name('login');
Route::post('login', 'App\Http\Controllers\AuthController@postAuth');
Route::get('logout', 'App\Http\Controllers\AuthController@logout');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
