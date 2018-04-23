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

    Route::get('account', 'UserIdentitiyController@show')->name('account');
    
    Route::get('make_event', function(){
        return view('create_events');
    })->name('make_event');

    Route::post('insd','UserIdentitiyController@store')->name('insertingdata');

    Route::post('inse', 'EventController@store')->name('insertingevent');
});

Route::get('join_event', function(){
    return view('join_events');
})->name('join');

Route::get('event', function(){
    return view('event');
})->name('event');

Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook')->name('login_facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');

Route::get('login/google', 'Auth\LoginController@redirectToGoogle')->name('login_google');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');
