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

Route::get('/', 'Article\ArticleController@index');
Route::get('/articles', 'Article\ArticleController@index');
Route::get('/articles/detail/{id}', 'Article\ArticleController@detail');

Auth::routes();
Route::get('/home', 'Article\ArticleController@index')->name('home');

Route::get('/articles/add', 'Article\ArticleController@add');
Route::post('/articles/add', 'Article\ArticleController@create');
Route::get('/articles/delete/{id}', 'Article\ArticleController@delete');

Route::post('/articles/detail/article_id/comments/add', 'Comment\CommentController@create');
Route::get('/articles/detail/article_id/comments/delete/{id}', 'Comment\CommentController@delete');