<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'webController@index')->name('/');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('productos', 'ProductController');
});

Route::get('/productos/{id}/images', 'ProductImageController@index');
// Route::post('/productos/{id}/image', 'ProductImageController@store');

Route::get('/productoimage/{image_id}', function ($image_id) {
    $images = \App\Image::find($image_id);
    return Storage::download($images->src);
});

Route::get('/detalle{id}','ProductController@show');


Route::get('/tienda/{filtro1?}/{filtro2?}', 'ProductController@shop_index')->name('tienda');

Route::get('/nosotros', function () {
    $user=Auth::user();
    return view('frontend.about-us',['user'=>$user]);
});

Route::get('/faqs', function () {

    $user=Auth::user();
    return view('frontend.faqs',['user'=>$user]);
});

Route::get('/blog', function () {
    $user=Auth::user();
    return view('frontend.blog',['user'=>$user]);
});

Route::get('/contacto', function () {
    $user=Auth::user();
    return view('frontend.contact',['user'=>$user]);
});

Route::post('mail', 'MailController@send' )->name('mail');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
//Rutas de Usuario
Route::get('/showEditUserList','UserController@showEdiList')->name('showEditUserList');
Route::post('/showEditUser','UserController@showEdit')->name('showEditUser');
Route::post('/editUser','UserController@edit')->name('editUser');
Route::post('/destroyUser','UserController@destroy')->name('destroyUser');
//Rutas instagram
Route::get('/insta', 'ImageController@index')->name('insta');
Route::get('/imagenIg', 'ImageController@showFormImg')->name('imagenIg');
Route::post('/saveImg','ImageController@store')->name('saveImg');
Route::post('/editIg','ImageController@edit')->name('editIg');
Route::post('/showEdit','ImageController@showEdit')->name('showEdit');
Route::post('/destroyIg','imageController@destroy')->name('destroyIg');
//Rutas carrito
Route::post('/carro-agregar', 'CartController@add')->name('cart.add');
Route::get('/carro-index', 'CartController@showCart')->name('cart.showCart');
Route::post('/carro-limpiar', 'CartController@clear')->name('cart.clear');
Route::get('/carro-remover/{id}', 'CartController@removeItem')->name('cart.remove');

