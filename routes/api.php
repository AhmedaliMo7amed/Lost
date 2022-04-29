<?php

use App\Http\Controllers\Auth\LoginController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/**************************************** SOCIAL  ***************************************/

Route::group(['prefix'=>'social','namespace'=>'API\Social'],function (){
    Route::post('Auth', 'SocialAuthController@socialLogin');
});

/**************************************** END SOCIAL *************************************/

///**************************************** OWNERS ***************************************/
//
///********** Login & Register for Owner **********/
//
//Route::group(['prefix'=>'store-owner','namespace'=>'API\Owners'],function (){
//    Route::post('login', 'AuthController@login');
//    Route::post('register', 'RegisterController@register');
//    Route::post('reset-password', 'ResetPwdReqController@reqForgotPassword');
//    Route::post('confirm-token', 'UpdatePwdController@confirmToken');
//    Route::post('update-password', 'UpdatePwdController@updatePassword');
//
//
//});
//
///**********  Protected Routes For Owner **********/
//
//Route::group(['prefix'=>'store-owner' ,'middleware'=>'checkOwnerToken:owner-api','namespace'=>'API\Owners'],function (){
//    // geneal routes
//    Route::post('logout', 'AuthController@logout');
//    Route::post('complete-info', 'RegisterController@completeSteps');
//
//    /// profile routes
//    Route::group(['prefix'=>'profile', 'middleware'=>'checkOwnerToken:owner-api'],function(){
//        Route::post('change-password', 'OwnerProfileController@changePassword');
//        Route::post('update-info', 'OwnerProfileController@updatePersonalInfo');
//        Route::post('update-avatar', 'OwnerProfileController@updateAvatar');
//    });
//    /// review routes
//    Route::group(['prefix'=>'review'],function(){
//        Route::get('get-all', 'ReviewController@index' );
//        Route::post('submit/{id}', 'ReviewController@store' );
//        Route::post('update/{id}', 'ReviewController@update');
//        Route::post('delete/{id}', 'ReviewController@destroy');
//        Route::get('show/{id}', 'ReviewController@show');
//    });
//    /// user reports routes
//    Route::group(['prefix'=>'report'],function(){
//        Route::get('get-all', 'GeneralController@index' );
//        Route::get('get/{id}', 'GeneralController@show' );
//        Route::get('list', 'GeneralController@list' );
//        Route::get('search', 'GeneralController@serialSerach' );
//    });
//
//
//});

///**************************************** END OWNERS ***************************************
//*
//*
//*/
///**************************************** USERS ***************************************/
//
///********** Login & Register for User **********/
//
//Route::group(['prefix'=>'user','namespace'=>'API\Users'],function (){
//    Route::post('login', 'AuthController@login');
//    Route::post('register', 'RegisterController@register');
//    Route::post('reset-password', 'ResetPwdReqController@reqForgotPassword');
//    Route::post('confirm-token', 'UpdatePwdController@confirmToken');
//    Route::post('update-password', 'UpdatePwdController@updatePassword');
//});
//
///**********  Protected Routes For User **********/
//
//Route::group(['prefix'=>'user' ,'middleware'=>'checkUserToken:user-api','namespace'=>'API\Users'],function (){
//    /// general routes
//    Route::post('logout', 'AuthController@logout');
//    Route::post('complete-info', 'RegisterController@completeSteps');
//
//    /// profile routes
//    Route::group(['prefix'=>'profile'],function(){
//        Route::post('change-password', 'UserProfileController@changePassword');
//        Route::post('update-info', 'UserProfileController@updatePersonalInfo');
//        Route::post('update-avatar', 'UserProfileController@updateAvatar');
//    });
//
//    /// reports routes
//    Route::group(['prefix'=>'report'],function(){
//        Route::get('get-all', 'ReportController@index');
//        Route::post('submit', 'ReportController@store');
//        Route::post('update/{id}', 'ReportController@update');
//        Route::get('show/{id}', 'ReportController@show');
//        Route::get('delete/{id}', 'ReportController@destroy');
//        Route::get('reviews', 'ReportController@allReviews');
//        Route::get('review/{id}', 'ReportController@reportReview');
//    });
//
//});
//
//
//
///**************************************** END USERS ***************************************
//*
//*
// *
// *
// *
//*/



// /*************** ADMINSTRATOR *****************/
// Route::get('getUsers', 'API\AdminController@index');
// Route::get('getUser/{id}', 'API\AdminController@show');
// Route::delete('getUser/delete/{id}', 'API\AdminController@delete');
// Route::post('register', 'API\RegisterController@register');
// Route::post('login', 'API\RegisterController@login');
// /**********************************************/


/**********************************************/
// Route::middleware('auth:api')->group( function (){
// // Route::get('devices', 'API\DeviceController@index');
// // Route::post('device/save', 'API\DeviceController@store');
// // Route::get('device/{id}', 'API\DeviceController@show');
// // Route::put('device/update', 'API\DeviceController@update');
//     Route::resource('devices', 'API\DeviceController'); // get // post // delete // update
//     Route::get('myDevices', 'API\DeviceController@device');
// });





