<?php

Route::get('/', function(){
    return view('index');
})->name('index');

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['level']], function(){
        Route::get('/home_admin', 'HomeController@home_admin')->name('home_admin');
    }); 
    Route::get('/home_user', 'HomeController@home_user')->name('home_user');

    Route::get('account', function(){
        return view('account_settings');
    })->name('account');
    
    Route::get('make_event', function(){
        return view('create_events');
    })->name('make_event');
});

Route::get('join_event', function(){
    return view('join_events');
})->name('join');

Route::get('event', function(){
    return view('event');
})->name('event');

Route::post('inputidentity', 'UserIdentitiyController@PostEvent')->name('janganvian2');
Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook')->name('login_facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');

Route::get('login/google', 'Auth\LoginController@redirectToGoogle')->name('login_google');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');
