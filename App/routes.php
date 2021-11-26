<?php

use Core\Facades\Route;

Route::get('','HomeController@index');
Route::get('about','HomeController@about');
Route::get('/contact','HomeController@contact');
Route::get('/category','CategoryController@index');
Route::get('/category/create','CategoryController@create');
Route::post('/category','CategoryController@store');


Route::get('/single-user-controller','SingleUserController');
Route::get('/single','SingleUserController@xcxccxc');



