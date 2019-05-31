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
Route::get('examList','Exam@examList');

Route::get('examLists','Exam@examLists');

Route::view('orders','order');
Route::post('login_do','LoginController@login_do');
Route::post('logout','LoginController@logout');
Route::get('logins', function () {
    return view('login');
});
Route::post('register/add','RegisterController@insert');

Route::get('register', function () {
    return view('register');
});

Route::post('register/name','RegisterController@username');
//Route::post('kemu1','RegisterController@username');
Route::get('cheType','Exam@cheType');
Route::get('getOrder','Exam@getOrder');