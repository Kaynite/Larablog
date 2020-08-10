<?php
use Illuminate\Support\Facades\Route;


Route::get('/', 'PostsController@index');
Route::get('admin/create', "PostsController@create");
Route::post('admin/create/store', "PostsController@store")->name("store");
Route::post('post/{id}/comment', "CommentsController@store")->name("storeComment");

Route::group(["prefix" => "/post"], function() {
    Route::get('{id}', "PostsController@show")->name("showPost");
    Route::get('{id}/edit', "PostsController@edit");
});

Route::get('blog/category/{id}', "CategoriesController@show");

