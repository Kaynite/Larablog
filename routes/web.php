<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PostsController@index')->name("main");
Route::get('post/{id}', "PostsController@show")->name("showPost");

Route::get('category/{id}', "CategoriesController@show")->name("showCategory");

Route::get('author/{id}', "UsersController@author")->name("showAuthor");

Route::post('post/{id}/comment', "CommentsController@store")->name("storeComment");

Route::get('/home', 'HomeController@index')->name('home');
