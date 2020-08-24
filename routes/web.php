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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cards-custom', function () {
    return view('cards-custom');
});

Route::get('/box', function () {
    return view('box');
});

Route::middleware([])
    ->prefix('admin')
    ->namespace('Admin')
    ->group(function (){
        Route::resource('artigos', 'ArtigosController');
    });

//Route::middleware(['auth'])
//    ->prefix('admin')
//    ->namespace('Admin')
//    ->group(function (){
//    Route::resource('artigos', 'ArtigosController');
//});
