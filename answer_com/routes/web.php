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
Route::view('header','header');
Route::get('select_type','IndexController@select_type');

Route::get('order_template','Exam@order_template');
Route::get('random_template','Exam@random_template');
Route::get('simulation_template','Exam@simulation_template');

Route::get('do_collect','Exam@do_collect');
Route::get('examList','Exam@examList');
Route::get('cheType','Exam@cheType');


Route::get('ranking','User@ranking');


Route::post('login_do','LoginController@login_do');
Route::post('register/add','LoginController@insert');
Route::post('register/name','LoginController@username');
Route::get('logout','LoginController@logout');

Route::view('logins','login');
Route::view('register','register');


Route::get('question/questList',"QuestionController@questList");

Route::get('question/addQuest',"QuestionController@addQuest");

Route::post('question/questAdd',"QuestionController@questAdd");

Route::get('question/updQuest',"QuestionController@updQuest");

Route::post('question/questUpd',"QuestionController@questUpd");

Route::get('question/questDel',"QuestionController@questDel");
Route::post('question/upload',"QuestionController@upload");

Route::get('question/keche',"QuestionController@keche");
Route::get('question/huoche',"QuestionController@huoche");
Route::get('question/motuo',"QuestionController@motuo");