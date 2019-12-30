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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources('companies','CompaniesController');
Route::resources('tasks','TasksController');
Route::resources('projects','ProjectsController');
Route::resources('roles','RolesController');
Route::resources('users','UsersController');
Route::resources('comments','CommentsController');
