<?php

Route::get('/admin', function () {
    return "Hello Admin!";
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('users', function () {
        return "Users Page";
    });

    Route::get('settings', function () {
        return "Settings Page";
    });

    Route::get('default', 'SecondController@show');
});