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

/* Route::resource("/", "GlobalController"); */

/* GLobal  */
Route::get("/","GlobalController@index")  -> name('home');
/* Employee route */
Route::get('/emps', "EmployeeController@index") -> name('emps.index');

Route::get('/emps/create', 'EmployeeController@create') -> name('emp.create');
Route::post('/emps/store', 'EmployeeController@store') -> name('emp.store');

Route::get('/emps/edit/{id}', 'EmployeeController@edit') -> name('emp.edit');
Route::post('/emps/update/{id}', 'EmployeeController@update') -> name('emp.update');

Route::get('/emps/show/{id}', "EmployeeController@show") -> name('emps.show');
Route::get("/emps/destroy/{id}","EmployeeController@destroy") -> name('emps.destroy');

/* Task route */
Route::get('/tasks', "TaskController@index") -> name('tasks.index');
Route::get('/tasks/create', 'TaskController@create') -> name('task.create');
Route::post('/comments/store', 'TaskController@store') -> name('task.store');
