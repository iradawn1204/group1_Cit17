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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/shotgun' ,'ShotgunsController@index');
Route::get('/shotgun/pumpaction' ,'PumpactionsController@index');
Route::get('/shotgun/breakaction' ,'BreakactionsController@index');


Route::get('/handgun' ,'HandgunsController@index');
Route::get('/handgun/pistol' ,'PistolsController@index');

Route::get('/machinegun' ,'MachinegunsController@index');
Route::get('/machinegun/submachinegun' ,'SubmachinegunsController@index');
Route::get('/machinegun/heavymachinegun' ,'HeavymachinegunsController@index');

Route::get('/bullet' ,'BulletController@index');

//users
Route::get('/users/create' ,'UsersController@create');
Route::get('/users' ,'UsersController@index');
Route::get('/users/{user}' ,'UsersController@show');
Route::get('/users/{user}/edit' ,'UsersController@edit');
Route::post('/users' ,'UsersController@store');
Route::put('users/{user}','UsersController@update');
Route::delete('users/{user}','UsersController@destroy');




 