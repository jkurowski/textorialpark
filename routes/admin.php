<?php
use Illuminate\Support\Facades\Route;

//GET - admin/crm/module
//POST - admin/crm/module - store
//PUT - admin/crm/module/{calendar} - update
//GET - admin/crm/module/{calendar} - show
//DELETE - admin/crm/module/{calendar} - destroy
//GET - admin/crm/module/{calendar}/edit - edit

Route::group([
    'namespace' => 'Admin', 'prefix' => '/admin', 'as' => 'admin.', 'middleware' => ['auth', 'can:admin-panel']], function () {

    Route::get('/', function () {
        return redirect('admin/settings/seo');
    });

    Route::post('slider/set', 'Slider\IndexController@sort')->name('slider.sort');
    Route::post('gallery/set', 'Gallery\IndexController@sort')->name('gallery.sort');
    Route::post('image/set', 'Gallery\ImageController@sort')->name('image.sort');
    Route::post('renters/set', 'Renters\IndexController@sort')->name('renters.sort');
    Route::get('ajaxGetGalleries', 'Gallery\IndexController@ajaxGetGalleries')->name('ajaxGetGalleries');


    Route::get('page/translate', 'Page\IndexController@translate')->name('translate');

    Route::resources([
        'dictionary' => 'Dictionary\IndexController',
        'user' => 'User\IndexController',
        'role' => 'Role\IndexController',
        'greylist' => 'Greylist\IndexController',
        'article' => 'Article\IndexController',
        'page' => 'Page\IndexController',
        'url' => 'Url\IndexController',
        'file' => 'File\IndexController',
        'gallery' => 'Gallery\IndexController',
        'image' => 'Gallery\ImageController',
        'slider' => 'Slider\IndexController',
        'renters' => 'Renters\IndexController'
    ]);

    Route::group(['namespace' => 'Client','prefix'=>'/clients', 'as' => 'clients.'], function () {

        Route::get('/', 'IndexController@index')->name('index');
        Route::get('/datatable', 'IndexController@datatable')->name('datatable');
        Route::get('/create', 'IndexController@create')->name('create');
        Route::get('/{client}', 'IndexController@show')->name('show');

        Route::get('{client}/rodo', 'RodoController@show')->name('rodo');

        // Client chat
        Route::group(['prefix'=>'{client}/chat', 'as' => 'chat.'], function () {
            Route::get('/', 'ChatController@show')->name('show');
            Route::post('/form', 'ChatController@form')->name('form');
            Route::post('/mark', 'ChatController@mark')->name('mark');
            Route::post('/', 'ChatController@create')->name('create');
        });
    });

    // Settings
    Route::group(['prefix'=>'/settings', 'as' => 'settings.'], function () {

        Route::resources([
            '/' => 'Dashboard\IndexController',
            'seo' => 'Dashboard\SeoController',
            'popup' => 'Dashboard\PopupController'
        ]);
    });

    // RODO
    Route::group(['prefix' => '/rodo', 'as' => 'rodo.'], function () {

        Route::resources([
            'rules' => 'Rodo\RulesController',
            'settings' => 'Rodo\SettingsController',
            'clients' => 'Rodo\ClientController'
        ]);
    });

    Route::get('logs', 'Log\IndexController@index')->name('log.index');
    Route::get('logs/datatable', 'Log\IndexController@datatable')->name('log.datatable');

    // DeveloPro
    Route::group(['namespace' => 'Developro', 'prefix' => '/developro', 'as' => 'developro.'], function () {

        Route::resources([
            'investment' => 'Investment\IndexController'
        ]);

        Route::group(['prefix' => '/investment', 'as' => 'investment.'], function () {
            Route::resources([
                '{investment}/plan' => 'Plan\IndexController',
                '{investment}/search' => 'Search\IndexController',
                '{investment}/buildings' => 'Building\BuildingController',
                '{investment}/building.floors' => 'Building\BuildingFloorController',
                '{investment}/building.floor.options' => 'Building\BuildingFloorOptionController',
                '{investment}/building.floor.properties' => 'Building\BuildingPropertyController',
                '{investment}/property/{property}/message' => 'Property\InboxController'
            ]);

            Route::get('{property}/remove-file', 'Building\BuildingPropertyController@removeFile')->name('removeFile');
        });
    });
});
