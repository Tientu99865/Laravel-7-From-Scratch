<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','HomepageController@index');

Route::get('articles','HomepageController@index');


//GET /articles
//GET /articles/id
//POST /articles
//PUT /articles/id
//DELETE /articles/id

Route::get('/articles/create','ArticleController@create');
Route::post('/articles','ArticleController@store');
Route::get('/articles/{article}','ArticleController@show');
Route::get('/articles/{id}/edit','ArticleController@edit');
Route::put('/articles/{id}/update','ArticleController@update');
Route::get('/articles/{id}/delete','ArticleController@destroy');
