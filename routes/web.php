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

Route::get('/', 'PageController@home');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');
Route::get('/page', 'PageController@page');

// Route::get('/projects', 'ProjectController@index')->name('project.index');
// Route::post('/projects', 'ProjectController@store')->name('project.store');
// Route::get('/projects/create', 'ProjectController@create')->name('project.create');
// Route::get('/projects/{project}', 'ProjectController@show')->name('project.show');
// Route::get('/projects/{project}/edit', 'ProjectController@edit')->name('project.edit');
// Route::patch('/projects/{project}', 'ProjectController@update')->name('project.update');
// Route::delete('/projects/{project}', 'ProjectController@delete')->name('project.delete');

Route::resource('project', 'ProjectController');
Route::resource('task', 'TaskController');
Route::post('project/{project}/task' , 'TaskController@store');
