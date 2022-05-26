<?php

use Illuminate\Support\Facades\Route;


/********** Login & Register for User **********/
Route::group(['prefix'=>'user','namespace'=>'API\Users'],function (){
    Route::post('login', 'AuthController@login');
    Route::post('register', 'RegisterController@register');
    Route::post('reset-password', 'ResetPwdReqController@reqForgotPassword');
    Route::post('confirm-token', 'UpdatePwdController@confirmToken');
    Route::post('update-password', 'UpdatePwdController@updatePassword');
});

/**********  Protected Routes For User **********/
Route::group(['prefix'=>'user' ,'middleware'=>'checkUserToken:user-api','namespace'=>'API\Users'],function (){
    /// general routes
    Route::post('logout', 'AuthController@logout');
    Route::get('getInfo', 'AuthController@getAuthInfo');
    Route::post('complete-info', 'RegisterController@completeSteps');

    /// profile routes
    Route::group(['prefix'=>'profile'],function(){
        Route::post('change-password', 'UserProfileController@changePassword');
        Route::post('update-info', 'UserProfileController@updatePersonalInfo');
        Route::post('update-contact', 'UserProfileController@updateContactInfo');
        Route::post('update-avatar', 'UserProfileController@updateAvatar');
    });

    /// reports routes
    Route::group(['prefix'=>'report'],function(){
        Route::get('get-all', 'ReportController@index');
        Route::post('submit', 'ReportController@store');
        Route::post('update/{id}', 'ReportController@update');
        Route::get('show/{id}', 'ReportController@show');
        Route::delete('delete/{id}', 'ReportController@destroy');
        Route::get('reviews', 'ReportController@allReviews');
        Route::get('review/{id}', 'ReportController@reportReview');
    });

});

