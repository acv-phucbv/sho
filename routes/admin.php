<?php
//Index
Route::get('/' ,'Controller@index')->name('admin.index');

//Categories
Route::get('/categories', 'CategoriesController@index')->name('admin.categories.index');
Route::get('/categories/create', 'CategoriesController@create')->name('admin.categories.create');
Route::post('/categories', 'CategoriesController@store')->name('admin.categories.store');
Route::get('/categories/{category}/edit', 'CategoriesController@edit')->name('admin.categories.edit');
Route::put('/categories/{category}', 'CategoriesController@update')->name('admin.categories.update');
Route::delete('/categories/{category}', 'CategoriesController@destroy')->name('admin.categories.destroy');

//Users
Route::get('/users', 'UsersController@index')->name('admin.users.index');
Route::get('/profile', 'UsersController@index')->name('admin.profile.show');