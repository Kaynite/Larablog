<?php

use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'admin'], function () {

    Route::get('/', function () {
        return view("admin.layouts.main");
    });

    Route::get('posts', "PostsController@adminPosts")->name("adminPosts");
    Route::get('posts/create', "PostsController@create")->name("adminCreatePost");
    Route::post('posts/store', "PostsController@store")->name("adminStorePost");
    Route::get('posts/{id}/edit', "PostsController@edit")->name("adminEditPost");
    Route::post('posts/{id}/update', "PostsController@update")->name("adminUpdatePost");
    Route::get('posts/{id}/delete', "PostsController@destroy")->name("adminDeletePost");

    Route::get('categories', function () {
        return "Settings Page";
    })->name("adminCategories");

    Route::get('comments', function() {

    })->name("adminComments");
});