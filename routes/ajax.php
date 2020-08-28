<?php
use Illuminate\Support\Facades\Route;


Route::get('posts', 'PostsController@ajaxPosts')->name('ajax.posts');
Route::post('addcomment/{post_id}', 'CommentsController@store')->name('ajax.addComment');