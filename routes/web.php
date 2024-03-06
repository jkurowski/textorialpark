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

Route::group(['namespace' => 'Front', 'prefix' => '{locale?}', 'where' => ['locale' => '(?!admin)*[a-z]{2}'],], function() {
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/najemcy/', 'Renters\IndexController@index')->name('renters');
    Route::get('/live/', 'Static\IndexController@live')->name('front.live');
    Route::get('/work/', 'Static\IndexController@work')->name('front.work');
    Route::get('/enjoy/', 'Static\IndexController@enjoy')->name('front.enjoy');

    Route::get('/historia/', 'Static\IndexController@history')->name('front.history');
    Route::get('/kampus/', 'Static\IndexController@kampus')->name('front.kampus');
    Route::get('/do-wynajecia/', 'Static\IndexController@plan')->name('front.plan');

    // Articles
    Route::group(['prefix' => 'newsboard', 'as' => 'front.news.'], function() {
        Route::get('/',         'ArticleController@index')->name('index');
        Route::get('/{slug}',   'ArticleController@show')->name('show');
    });

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

    Route::get('{uri}', 'MenuController@index')->where('uri', '([A-Za-z0-9\-\/]+)')->name('static');
});