<?php

use Illuminate\Support\Facades\Route;

/********** Login & Register for Admin **********/

Route::group(['prefix'=>'admin','namespace'=>'API\Admins'],function (){
    Route::post('login', 'AuthController@login');
});

Route::group(['prefix'=>'admin' ,'middleware'=>'CheckAdminToken:admin-api','namespace'=>'API\Admins'],function (){
    // geneal routes
    Route::post('logout', 'AuthController@logout');
    Route::post('counters', 'AdminController@counters');
    // User Routes
    Route::group(['prefix'=>'users'],function(){
        Route::get('get-all', 'AdminUsersController@getUsers');
        Route::get('get/{id}', 'AdminUsersController@getUser');
        Route::post('add', 'AdminUsersController@addUser');
        Route::post('update/{id}', 'AdminUsersController@updateUser');
        Route::delete('delete/{id}', 'AdminUsersController@deleteUser');
        Route::get('reportsCount', 'AdminUsersController@usersReportsCount');
        Route::get('usersList', 'AdminUsersController@usersList');
    });

    // Reports Routes
    Route::group(['prefix'=>'reports'],function(){
        Route::get('get-all', 'AdminReportsController@getReports');
        Route::get('get/{id}', 'AdminReportsController@getReport');
        Route::post('add', 'AdminReportsController@addReport');
        Route::post('update/{id}', 'AdminReportsController@updateReport');
        Route::delete('delete/{id}', 'AdminReportsController@deleteReport');
    });

    // Owners Routes
    Route::group(['prefix'=>'owners'],function(){
        Route::get('get-all', 'AdminOwnersController@getOwners');
        Route::get('get/{id}', 'AdminOwnersController@getOwner');
        Route::post('add', 'AdminOwnersController@addOwner');
        Route::post('update/{id}', 'AdminOwnersController@updateOwner');
        Route::delete('delete/{id}', 'AdminOwnersController@deleteOwner');
        Route::get('reviewsCount', 'AdminOwnersController@ownersReviewsCount');
        Route::get('ownersList', 'AdminOwnersController@ownersList');
    });

    // Reviews Routes
    Route::group(['prefix'=>'reviews'],function(){
        Route::get('get-all', 'AdminReviewController@getReviews');
        Route::get('get/{id}', 'AdminReviewController@getReview');
        Route::post('add', 'AdminReviewController@addReview');
        Route::post('update/{id}', 'AdminReviewController@updateReview');
        Route::delete('delete/{id}', 'AdminReviewController@deleteReview');
    });

});



