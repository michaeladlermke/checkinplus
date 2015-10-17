<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('contact', 'PagesController@contact');
Route::get('about','PagesController@about');

//this resource automatically creates the list, create, edit and destroy routes
//in terminal, type: 'php artisan route:list' for complete routing list
Route::resource('users','UsersController');
Route::resource('courses','CoursesController');

//Authentication routes
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

//Registration routes
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

//Post login attempt routes
//When successful, go home to the dashboard
Route::get('home', 'UsersController@home');
Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::get('/', function () {
    return view('welcome');
});
