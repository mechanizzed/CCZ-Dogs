<?php

Route::get('/', function () {
    return redirect('/login');
});


//Login Pages
Auth::routes();

//Admin
Route::middleware('auth')->group(function () {

  //User
    Route::prefix('user')->group(function () {
        Route::get('settings', 'User\UserController@settings')->name('user.settings');
        Route::put('settings/update', 'User\UserController@settingsUpdate')->name('user.settings.update');
        Route::get('password', 'User\UserController@password')->name('user.password');
        Route::put('password/update', 'User\UserController@passwordUpdate')->name('user.password.update');
    });

    //Home
    Route::get('/home', 'Home\HomeController@index')->name('home');
    Route::put('/home/seo/update/{id}', 'Home\HomeController@seoUpdate')->name('home.seo.update');

    //Raças
    Route::prefix('racas')->group(function () {
        Route::get('', 'Raca\RacaController@index')->name('raca.index');
        Route::post('store', 'Raca\RacaController@store')->name('raca.store');
        Route::put('update/{id}', 'Raca\RacaController@update')->name('raca.update');
        Route::get('delete/{id}', 'Raca\RacaController@delete')->name('raca.delete');
    });
});
