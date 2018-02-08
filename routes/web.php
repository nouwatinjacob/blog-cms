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

Route::get('/test', function () {
    return ;
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('/home', 'HomeController@index')->name('home');

    // All Posts Route

    Route::get('/posts', 'PostsController@index')->name('posts');

    Route::get('/post/create', 'PostsController@create')->name('post.create');

    Route::post('/post/store', 'PostsController@store')->name('post.store');

    Route::get('/post/delete/{id}', 'PostsController@destroy')->name('post.delete');

    Route::get('/post/trashed', 'PostsController@trashed')->name('post.trashed');

    Route::get('/post/kill/{id}', 'PostsController@kill')->name('post.kill');

    Route::get('/post/restore/{id}', 'PostsController@restore')->name('post.restore');

    Route::get('/post/edit/{id}', 'PostsController@edit')->name('post.edit');

    Route::post('/post/update/{id}', 'PostsController@update')->name('post.update');

    // All Categories Route

    Route::get('/categories', 'CategoriesController@index')->name('categories');

    Route::get('/category/create', 'CategoriesController@create')->name('category.create');

    Route::post('/category/store', 'CategoriesController@store')->name('category.store');

    Route::get('/category/delete/{id}', 'CategoriesController@destroy')->name('category.delete');

    Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('category.edit');

    Route::post('/category/update/{id}', 'CategoriesController@update')->name('category.update');

    // All tags Route

    Route::get('/tags', 'TagsController@index')->name('tags');

    Route::get('/tag/create', 'TagsController@create')->name('tag.create');

    Route::post('/tag/store', 'TagsController@store')->name('tag.store');

    Route::get('/tag/delete/{id}', 'TagsController@destroy')->name('tag.delete');

    Route::get('/tag/edit/{id}', 'TagsController@edit')->name('tag.edit');

    Route::post('/tag/update/{id}', 'TagsController@update')->name('tag.update');
});