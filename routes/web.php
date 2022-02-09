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

Route::get('/singleton', ['uses' => 'App\Http\Controllers\Controller@singleton']);
Route::get('/factory', ['uses' => 'App\Http\Controllers\Controller@factory']);
Route::get('/facade', ['uses' => 'App\Http\Controllers\Controller@facade']);
Route::get('/aggregation', ['uses' => 'App\Http\Controllers\Controller@aggregation']);
Route::get('/observer', ['uses' => 'App\Http\Controllers\Controller@observer']);
Route::get('/strategie', ['uses' => 'App\Http\Controllers\Controller@strategie']);
Route::get('/template', ['uses' => 'App\Http\Controllers\Controller@template']);
