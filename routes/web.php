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

/*
 * The path for routing a project
    GET /projects (index)
    GET /projects/create (create)
    POST /projects (store)
    GET /projects/1 (show)
    GET /projects/1/edit (edit)
    PATCH /projects/1 (update)
    DELETE /projects/1 (destroy)
*/
Auth::routes();

Route::get('/', 'ProjectsController@index');
Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/create', 'ProjectsController@create');
Route::post('/projects', 'ProjectsController@store');
Route::get('/projects/{project}', 'ProjectsController@show'); // ->middleware('can:show,project');
Route::get('/projects/{project}/edit', 'ProjectsController@edit');
Route::patch('/projects/{project}', 'ProjectsController@update');
//Route::patch('/projects/{project}/notes', 'ProjectsController@updateNotes'); ???
Route::delete('/projects/{project}', 'ProjectsController@destroy');

//Tasks
Route::patch('/projects/{project}/tasks/{task}', 'TasksController@update');
Route::delete('/projects/{project}/tasks/{task}', 'TasksController@destroy');

//Project's tasks
Route::get('/projects/{project}/create', 'ProjectTasksController@create');
Route::post('/projects/{project}/projectTasks', 'ProjectTasksController@store');
