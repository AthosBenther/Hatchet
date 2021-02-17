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

Route::get('/start', function () {
    return view('start');
});
Route::get('/kill', function () {
    return view('kill');
});
Route::get('/restart', function () {
    return view('restart');
});
Route::get('/isrunning', function () {
    return view('isrunning');
});
