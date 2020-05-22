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
// users routes

Route::post('/user/save', 'UserController@store');



Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/employees/new', function () {
        return view('employees.new');
    });

});
