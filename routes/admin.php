<?php

use Illuminate\Support\Facades\Route;

/********** Login & Register for Admin **********/

Route::group(['prefix'=>'admin','namespace'=>'API\Admins'],function (){
    Route::post('login', 'AuthController@login');
});

Route::group(['prefix'=>'admin' ,'middleware'=>'CheckAdminToken:admin-api','namespace'=>'API\Admins'],function (){
    // geneal routes
    Route::post('logout', 'AuthController@logout');

    // User Routes
    Route::get('getUsers', 'AdminController@getUsers');
    Route::get('getUser/{id}', 'AdminController@getUser');
    Route::delete('deleteUser/{id}', 'AdminController@deleteUser');
    Route::post('updateUser/{id}', 'AdminController@updateUser');
    Route::get('usersReportsCount', 'AdminController@usersReportsCount');

});



