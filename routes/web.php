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
//
Route::get('/', function () {
    return view('welcome');
});

//下記6行を追記して下さい
// タスクの⼀覧
Route::get('/tasks', 'TaskController@index');
// タスクの保存
Route::post('/task', 'TaskController@store');
// タスクの削除
Route::delete('/task/{task}', 'TaskController@destroy');
