<?php

Route::get('/', 'IndexController@index');

Route::get('/portfolio', function () {
    return view('pages.portfolio');
});

Route::get('/article', 'ArticleController@index');
Route::get('/article/create', 'ArticleController@create');
Route::post('/article', 'ArticleController@store')->name('article.store');
Route::get('/article/{article}', 'ArticleController@show')->name('article.show');

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
