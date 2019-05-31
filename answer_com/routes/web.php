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
Route::get('cheType','Exam@cheType');
Route::get('getOrder','Exam@getOrder');
Route::view('orders','order');

//后台题库相关路由
Route::get('question/questList',"QuestionController@questList");
//渲染添加题库页面
Route::get('question/addQuest',"QuestionController@addQuest");
//处理添加题库
Route::post('question/questAdd',"QuestionController@questAdd");
//渲染修改页面
Route::get('question/updQuest',"QuestionController@updQuest");
//渲染修改数据
Route::post('question/questUpd',"QuestionController@questUpd");
//删除
Route::get('question/questDel',"QuestionController@questDel");
Route::post('question/upload',"QuestionController@upload");

Route::get('question/keche',"QuestionController@keche");
Route::get('question/huoche',"QuestionController@huoche");
Route::get('question/motuo',"QuestionController@motuo");