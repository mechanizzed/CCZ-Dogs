<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();
});

//Categories
Route::prefix('categories')->group(function(){
	Route::get('', 'Api\Category\CategoryController@all');
	Route::get('category/{id}', 'Api\Category\CategoryController@find');
});

//Products
Route::prefix('products')->group(function(){
	Route::get('', 'Api\Product\ProductController@all');
	Route::get('product/{id}', 'Api\Product\ProductController@show');
	Route::get('search/{value}', 'Api\Product\ProductController@search');
	Route::get('paginate/{page}', 'Api\Product\ProductController@paginate');
	Route::get('limit/{limit}', 'Api\Product\ProductController@limit');
});

//Users Facebook
Route::prefix('facebook-users')->group(function(){
	Route::post('store', 'Api\FacebookUser\FacebookUserController@store');
	Route::get('findFacebookId/{id}', 'Api\FacebookUser\FacebookUserController@findFacebookId');
	Route::get('find/{id}', 'Api\FacebookUser\FacebookUserController@find');
});

//Favourites
Route::prefix('favourites-products')->group(function(){
	Route::post('store', 'Api\Favourites\FavouritesController@store');
	Route::get('check/{idUser}/{idProduct}', 'Api\Favourites\FavouritesController@check');
});