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

Route::get('/','JobController@index');
Route::get('/job/{job_id}','JobController@showJob');
Route::get('/search','JobController@search');

Route::get('/admin','AdminController@dashboard');
Route::get('/admin/add_job','AdminController@addJob');
Route::post('/admin/add_job','AdminController@saveJob');
Route::get('/admin/job/{job_id}','AdminController@showJob');
Route::get('/admin/job/{job_id}/edit','AdminController@editJob');
Route::post('/admin/job/{job_id}/edit','AdminController@updateJob');
Route::get('/admin/job/{job_id}/delete','AdminController@deleteJob');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
