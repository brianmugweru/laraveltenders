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


Route::group(['middleware' => ['web']], function(){
  Route::get('/', ['as' => 'home', 'uses' => 'TendersController@index']);
  Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@login']);
  Route::post('/auth/login', ['as'=>'handlelogin', 'uses'=>'AuthController@handlelogin']);
  Route::post('/addtender', ['as'=>'addtender', 'uses'=>'TendersController@store']);
  Route::resource('users', 'UserController', ['only'=>['create', 'store']]); 
  Route::resource('tenders', 'TendersController',['only'=>['create', 'store','show']]);
  Route::resource('bids', 'BidsController',['only'=>['store','show']]);
  Route::get('/dashboard', ['as'=>'dashboard', 'middleware'=>'admin', 'uses'=>'TendersController@create']);
  Route::get('logout', ['as'=>'logout', 'uses'=>'AuthController@logout']);
});

