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
Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');
Route::get('/email', 'PagesController@email');    
Route::get('/projects','ProjectsController@index');
Route::get('/projects/create','ProjectsController@create');
Route::post('/projects','ProjectsController@store');
Route::patch('/projects/{project}',"ProjectsController@update");
Route::post('/projects/{project}/edit',"ProjectsController@edit");
Route::post('/projects/{project}/destroy',"ProjectsController@destroy");
 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
