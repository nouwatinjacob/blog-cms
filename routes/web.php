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
    return App\Profile::find(1)->user;
});

Route::get('/results', function () {
    $posts = \App\Post::where('title', 'like', '%'.request('query').'%')->get();

    return view('results')
    ->with('posts', $posts)
    ->with('title', 'Search Results:'. request('query'))
    ->with('settings', \App\Setting::first())
    ->with('categories', \App\Category::take(6)->get())
    ->with('query', request('query'))
    ->with('tags', \App\Tag::all());
});

// Front end Routes
Route::get('/', 'FrontEndController@index')->name('index');

Route::get('post/{slug}', 'FrontEndController@singlePost')->name('post.single');

Route::get('category/{id}', 'FrontEndController@category')->name('category.single');

Route::get('tag/{id}', 'FrontEndController@tag')->name('tag.single');

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

    // All Users Route

    Route::get('/users', 'UsersController@index')->name('users');

    Route::get('/user/create', 'UsersController@create')->name('user.create');

    Route::post('/user/store', 'UsersController@store')->name('user.store');

    Route::post('/user/admin/{id}', 'UsersController@admin')->name('user.admin');

    Route::get('/user/admin/{id}', 'UsersController@admin')->name('user.admin');

    Route::get('/user/delete/{id}', 'UsersController@destroy')->name('user.delete');

    // User Profile Route

    Route::get('/user/profile', 'ProfilesController@index')->name('user.profile');

    Route::post('/user/profile/update', 'ProfilesController@update')->name('user.profile.update');

    // Settings Routes

    Route::get('/settings', 'SettingsController@index')->name('settings')->middleware('admin');

    Route::post('/settings/update', 'SettingsController@update')->name('settings.update')->middleware('admin');

});