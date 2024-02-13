<?php

use App\Models\User;
use App\Notifications\AdminEmailNotification;
use App\Notifications\PasswordResetNotification;
use App\Notifications\UserEmailNotification;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('routes', function() {
    \Artisan::call('route:list');
    return '<pre>' . \Artisan::output() . '</pre>';
});

Route::group(['namespace' => 'Front'], function () {
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/najemcy/', 'Renters\IndexController@index');
    Route::get('/live/', 'Static\IndexController@live')->name('front.live');
    Route::get('/work/', 'Static\IndexController@work')->name('front.work');
    Route::get('/enjoy/', 'Static\IndexController@enjoy')->name('front.enjoy');

    Route::get('/historia/', 'Static\IndexController@history')->name('front.history');

    // Contact page
    Route::get('kontakt', 'ContactController@index')->name('contact');
    Route::post('kontakt', 'ContactController@form')->name('contact.form');

    // Reservation page
    Route::get('rezerwacja', 'ReservationController@index')->name('reservation');
    Route::post('rezerwacja', 'ReservationController@form')->name('reservation.form');

    // Inline
    Route::group(['prefix'=>'/inline', 'as' => 'front.inline.'], function() {
        Route::get('/', 'InlineController@index')->name('index');
        Route::get('/loadinline/{inline}', 'InlineController@show')->name('show');
        Route::post('/update/{inline}', 'InlineController@update')->name('update');
    });
});