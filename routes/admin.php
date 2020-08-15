<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Authentication Routes
Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    // Main Admin Panel Page Route    
    Route::get('/', function () {
        return view("admin.layouts.main");
    })->name('adminMain');

    // Admin Panel Posts Routes
    Route::get('posts', 'PostsController@adminPosts')->name('adminPosts');
    Route::get('posts/create', 'PostsController@create')->name('adminCreatePost');
    Route::post('posts/store', 'PostsController@store')->name('adminStorePost');
    Route::get('posts/{id}/edit', 'PostsController@edit')->name('adminEditPost');
    Route::post('posts/{id}/update', 'PostsController@update')->name('adminUpdatePost');
    Route::get('posts/{id}/delete', 'PostsController@destroy')->name('adminDeletePost');

    Route::get('user', function () {
        return view('admin.showuser');
    });

    // Admin Panel Categories Routes
    Route::get('categories', 'CategoriesController@adminCategories')->name('adminCategories');
    Route::get('categories/create', 'CategoriesController@create')->name('adminCreateCategory');
    Route::post('categories/store', 'CategoriesController@store')->name('adminStoreCategory');
    Route::get('categories/{id}/edit', 'CategoriesController@edit')->name('adminEditCategory');
    Route::post('categories/{id}/update', 'CategoriesController@update')->name('adminUpdateCategory');
    Route::get('categories/{id}/delete', 'CategoriesController@destroy')->name('adminDeleteCategory');

    // Admin Panel Comments Routes Goes Here
    Route::get('comments', function () {
    })->name('adminComments');
    Route::get('comments/{id}', "CommentsController@show")->name("showComment");

    // Profile Route
    Route::get('profile', function() {
        return view('admin.profile');
    })->name('adminProfile');
});
