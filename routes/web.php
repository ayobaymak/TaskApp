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

Route::get('/', function (){
    return view('tasks.welcome');
});

//Route::get('/delete', 'TasksController@delete');

//Route::get('/tasks', 'TasksController@index');
//
//Route::get('/tasks/{task}', 'TasksController@show');
//
//Route::get('/add_task', 'TasksController@create');
//
//Route::post('/tasks', 'TasksController@store');
//
//Route::get('/edit_tasks', 'TasksController@edit');

Route::resource('/tasks', 'TasksController');

