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

Route::group(['middleware' => ['web']], function(){
  Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@login']);
  Route::post('/auth/login', ['as'=>'handlelogin', 'uses'=>'AuthController@handlelogin']);
  Route::resource('users', 'UserController', ['only'=>['create', 'store']]); 
});


Route::get('/dashboard', function(){
  return view('dashboard');
})->middleware('auth');
