<?php

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

<<<<<<< HEAD
Route::namespace('Dash')->group(function(){
    Route::prefix('dashboard')->group(function (){
        Route::get('/','DashController@index')->name('dash.home');
    });
});

Auth::routes();
=======
Auth::routes();

>>>>>>> 46489b6f46ac8883a63e41cf5814efd9760109ab
Route::get('/home', 'HomeController@index')->name('home');
