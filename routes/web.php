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

// Tester sans créer du controller
//Route::get('/', function () {
//    return view('welcome', [
        // 'tasks' => $tasks,
        // 'title' => 'Title of project'
//    ]);
//});

//Route::post('/projects', function() {
    // App\Project::create(request(['title', 'description']));
//});

Route::get('/projects', 'ProjectsController@index');
Route::post('/projects', 'ProjectsController@store');
