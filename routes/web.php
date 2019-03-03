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
 * Routes for the home pages.
 */
Route::get('/', 'HomeController@index')->name('home.index');



/*
 * Routes for the blog pages.
 */
Route::get('blog/',                 'BlogController@index')     ->name('blog.index');
Route::get('blog/post/{slug}',      'BlogController@post')      ->name('blog.post');
Route::get('blog/author/{id}',      'BlogController@author')    ->name('blog.author');
Route::get('blog/category/{slug}',  'BlogController@category')  ->name('blog.category');
