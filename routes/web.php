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
  para acceder desde LAN:
  sudo php -S 192.168.0.15:8000
*/
Route::redirect('/', 'blog');

Auth::routes();

Route::get('blog', 'Web\PageController@blog')->name('blog');
Route::get('entrada/{slug}', 'Web\PageController@post')->name('post');
Route::get('etiqueta/{slug}', 'Web\PageController@tag')->name('tag');
Route::get('categoria/{slug}', 'Web\PageController@category')->name('category');

//admin
Route::resource('tags', 'Admin\TagController');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('posts', 'Admin\PostController');
