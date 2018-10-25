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
  
  //Dogs
  Route::prefix('dogs')->group(function () {
    Route::get('', 'Dogs\DogsController@index')->name('dogs.index');
    Route::post('store', 'Dogs\DogsController@store')->name('dogs.store');
    Route::put('update/{id}', 'Dogs\DogsController@update')->name('dogs.update');
    Route::get('delete/{id}', 'Dogs\DogsController@delete')->name('dogs.delete');
    Route::post('updateImage/{id}', 'Dogs\DogsController@updateImage')->name('dogs.update.image');
  });
  
  //Raças
  Route::prefix('racas')->group(function () {
    Route::get('', 'Raca\RacaController@index')->name('raca.index');
    Route::post('store', 'Raca\RacaController@store')->name('raca.store');
    Route::put('update/{id}', 'Raca\RacaController@update')->name('raca.update');
    Route::get('delete/{id}', 'Raca\RacaController@delete')->name('raca.delete');
  });
  
});
