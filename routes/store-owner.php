<?php

use Illuminate\Support\Facades\Route;

/********** Login & Register for Owner **********/

Route::group(['prefix'=>'store-owner','namespace'=>'API\Owners'],function (){
    Route::post('login', 'AuthController@login');
    Route::post('register', 'RegisterController@register');
    Route::post('reset-password', 'ResetPwdReqController@reqForgotPassword');
    Route::post('confirm-token', 'UpdatePwdController@confirmToken');
    Route::post('update-password', 'UpdatePwdController@updatePassword');
});

/**********  Protected Routes For Owner **********/
Route::group(['prefix'=>'store-owner' ,'middleware'=>'checkOwnerToken:owner-api','namespace'=>'API\Owners'],function (){
    // geneal routes
    Route::post('logout', 'AuthController@logout');
    Route::post('complete-info', 'RegisterController@completeSteps');

    /// profile routes
    Route::group(['prefix'=>'profile', 'middleware'=>'checkOwnerToken:owner-api'],function(){
        Route::post('change-password', 'OwnerProfileController@changePassword');
        Route::post('update-info', 'OwnerProfileController@updatePersonalInfo');
        Route::post('update-store', 'OwnerProfileController@updateStoreInfo');
        Route::post('update-avatar', 'OwnerProfileController@updateAvatar');
    });
    /// review routes
    Route::group(['prefix'=>'review'],function(){
        Route::get('get-all', 'ReviewController@index' );
        Route::post('submit/{id}', 'ReviewController@store' );
        Route::post('update/{id}', 'ReviewController@update');
        Route::delete('delete/{id}', 'ReviewController@destroy');
        Route::get('show/{id}', 'ReviewController@show');
    });
    /// user reports routes
    Route::group(['prefix'=>'report'],function(){
        Route::get('get-all', 'GeneralController@index' );
        Route::get('get/{id}', 'GeneralController@show' );
        Route::get('list', 'GeneralController@list' );
        Route::get('serialSerach', 'GeneralController@serialSerach' );
    });


});
