<?php
use Illuminate\Support\Facades\Route;


Route::get('posts', 'PostsController@ajaxPosts')->name('ajax.posts');