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
Route::get('/api/projects', [
   'uses' => 'AppController@getProjects'
]);
Route::get('/api/clients', [
   'uses' => 'AppController@getClients'
]);
Route::get('/api/locations', [
   'uses' => 'AppController@getLocations'
]);
Route::get('/api/services', [
   'uses' => 'AppController@getServices'
]);
Route::get('/api/subservices', [
   'uses' => 'AppController@getSubservices'
]);
Route::post('/api/project/add', [
   'uses' => 'AppController@addProject'
]);
Route::post('/api/project/update', [
   'uses' => 'AppController@updateProject'
]);
Route::post('/api/project/delete/{id}', [
   'uses' => 'AppController@deleteProject'
]);
Route::get('/api/project/{id}', [
   'uses' => 'AppController@getProject'
]);
