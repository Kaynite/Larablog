<?php
use Illuminate\Support\Facades\Route;


Route::get('/', 'PostsController@index')->name("main");
Route::post('post/{id}/comment', "CommentsController@store")->name("storeComment");

Route::group(["prefix" => "/post"], function() {
    Route::get('{id}', "PostsController@show")->name("showPost");
    Route::get('{id}/edit', "PostsController@edit");
});

Route::get('category/{id}', "CategoriesController@show")->name("showCategory");

