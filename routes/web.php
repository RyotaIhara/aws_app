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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('types', 'App\Http\Controllers\TypeController');

Route::get('/contents/softdelete', function() {
    Type::find(5)->delete();
});
