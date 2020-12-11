<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('logout', 'LoginController@logout');
*/

Route::get('/productos/{product_id}/images', 'ProductImageController@index');
Route::post('/productos/{product_id}/image', 'ProductImageController@store')->name('images.store');

// Route::put('/houses/image/{id}/changemainstate', 'ProductImageController@changeState');

// Route::get('/houses/{house_id}/images', 'ProductImageController@index');

Route::delete('/productos/deleteimage/{id}', 'ProductImageController@destroy');

// Route::put('/autoMain/{id}', 'ProductImageController@autoMain');

// Route::get('/logout', 'LoginController@logout');
