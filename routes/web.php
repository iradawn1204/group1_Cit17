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
Route::get('/login' ,'AuthController@index')->name('login');
Route::post('/login' ,'AuthController@login');

Route::get('/users' ,'UsersController@index');
Route::get('/users/create' ,'UsersController@create');
Route::post('/users' ,'UsersController@store');
Route::get('/users/{user}' ,'UsersController@show');
Route::get('/users/{user}/edit' ,'UsersController@edit');
Route::put('users/{user}','UsersController@update');
Route::delete('users/{user}','UsersController@destroy');





Route::middleware(['auth'])->group(function(){

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});

	

Route::get('/logout' ,'AuthController@logout');	









//shotgun
Route::get('/shotgun' ,'ShotgunsController@index');



//shotgun pump action
Route::get('/shotgun/pumpactios/{{ $shotgun->id}}pumpactions/create' ,'UsersController@create');
Route::get('/shotgun/pumpactions' ,'PumpactionsController@index');
Route::get('/shotgun/pumpactions/{pump_action}' ,'PumpactionsController@show');
Route::get('/shotgun/pumpactions/{{pump_action}->id}}/edit' ,'UsersController@edit');
Route::post('/shotgun/pumpactions' ,'UsersController@store');
Route::put('/shotgun/pumpactions/{{ $shotgun->id}}/{pump_action}','UsersController@update');
Route::delete('/shotgun/pumpactions/{{ $shotgun->id}}/{pump_action}','UsersController@destroy');





//shotgun break action

Route::get('/shotgun/breakactions' ,'BreakactionsController@index');
Route::get('/shotgun/breakactions/{{ $shotgun->id}}breakactions/create' ,'BreakactionsController@create');
Route::get('/shotgun/breakactions/{break_action}' ,'BreakactionsController@show');
Route::get('/shotgun/breakactions/{{break_action}->id}}/edit' ,'BreakactionsController@edit');
Route::post('/shotgun/breakaction' ,'BreakactionsController@store');
Route::put('/shotgun/breakactions/{{ $shotgun->id}}/{break_action}','BreakactionsController@update');
Route::delete('/shotgun/breakaction/{{ $shotgun->id}}/{break_action}','BreakactionsController@destroy');







Route::get('/handgun' ,'HandgunsController@index');
Route::get('/handgun/pistol' ,'PistolsController@index');
Route::get('/handgun/pistol' ,'PistolsController@index');



Route::get('/machinegun' ,'MachinegunsController@index');
Route::get('/machinegun/submachinegun' ,'SubmachinegunsController@index');
Route::get('/machinegun/heavymachinegun' ,'HeavymachinegunsController@index');




 
Route::get('/bullet' ,'BulletController@index');


});


 