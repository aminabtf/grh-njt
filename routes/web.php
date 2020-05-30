<?php

use Illuminate\Support\Facades\Route;
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


Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');


//Route::group(['middleware' => ['auth']], function () {

    //home or dashboard
    Route::get('/', 'HomeController@index');


    // employe routes
    Route::get('/users/newform', function () {
        return view('users.newform');
    });
    Route::post('/users/save', 'UserController@store');
    Route::get('/users/list', 'UserController@index');




    //unities routes

    Route::post('/unity/save', 'UnityController@store');
    Route::get('/unities/newform', 'UnityController@index');
//});
