<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Homepage
Route::get( '/', array('as' => '/', 'uses' => 'HomeController@showHome'));

//Pages
Route::get(  'vins', 'VinController@index');
Route::get(  'contact', 'ContactController@index');
Route::post( 'contact', 'ContactController@sendForm');
Route::get(  'caveau', 'CaveauController@index');
Route::get(  'diaporama', 'DiaporamaController@index');

//Authentication
Route::get( 'user/login',    array('as' => 'user/login', 'uses' =>'UserController@login'));
Route::post('user/login',    array('as' => 'user/connect', 'uses'=>'UserController@connect'));
Route::get( 'user/logout',   array('as' => 'user/logout', 'uses'=>'UserController@logout'));

//Recuperation du mot de passe
Route::get(" request", "UserController@showRequest");
Route::post("request", "UserController@request");
Route::post("reset/{token}", "UserController@reset");
