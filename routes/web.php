<?php

// auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// IndexController
Route::get('/', 'IndexController@index');

Route::get('/portfolio', function () {
    return view('pages.portfolio');
});

// ArticleController
Route::get('/article', 'ArticleController@index');
Route::middleware('auth')->get('/article/create', 'ArticleController@create');
Route::post('/article', 'ArticleController@store')->name('article.store');
Route::get('/article/{article}', 'ArticleController@show')->name('article.show');
Route::get('/article/{article}/edit', 'ArticleController@edit')->name('article.edit');
Route::patch('/article/{article}', 'ArticleController@update')->name('article.update');

// Category
Route::get('/article/category/{category}', 'CategoryController@index')->name('category.index');;

// CommentController
Route::post('/article/{article}/comment', 'CommentController@store')->name('comment.store');

Route::get('/about-us', function () {
    return view('pages.about-us');
});

Route::get('/contact-form', function () {
    return view('pages.contact-form');
});

Route::get('/discontent-form', function () {
    return view('pages.discontent-form');
});

Route::get('/hire-form', function () {
    return view('pages.hire-form');
});
