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
    return View('welcome');
});

Route::get('about', function () {
    return View('about');
});

Route::get('users',['uses'=>'UserController@index']);


Route::post('register',['uses'=>'UserController@RegisterUser',
                         'as'=>'signup'



]);


