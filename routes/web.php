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

Route::get('/', function () {

    $productsSlider1Dama = \App\Product::where('in_novelties', 1)->where('gender', 'dama')->take(8)->get();
    $productsSlider1Hombre = \App\Product::where('in_novelties', 1)->where('gender', 'caballero')->take(8)->get();
    $productsSlider1Rebaja = \App\Product::where('in_discounts', 1)->take(8)->get();

    foreach ($productsSlider1Dama as $key => $producto) {
        
        $foto = \App\Image::where('product_id', $producto->id)->first();
        $producto->image = $foto->id;
    }

    foreach ($productsSlider1Hombre as $key => $producto) {
        
        $foto = \App\Image::where('product_id', $producto->id)->first();
        $producto->image = $foto->id;
    }

    foreach ($productsSlider1Rebaja as $key => $producto) {
        
        $foto = \App\Image::where('product_id', $producto->id)->first();
        $producto->image = $foto->id;
    }

    $productsDestacados = \App\Product::where('in_populars', 1)->take(6)->get();

    foreach ($productsDestacados as $key => $producto) {
        
        $foto = \App\Image::where('product_id', $producto->id)->first();
        $producto->image = $foto->id;
    }

    

    // dd($productsSlider1Dama);


    return view('frontend.index',[
        'productsSlider1Dama' => $productsSlider1Dama, 
        'productsSlider1Hombre' => $productsSlider1Hombre,
        'productsSlider1Rebaja' => $productsSlider1Rebaja,
        'productsDestacados' => $productsDestacados
        ]);
});

// Route::group(['middleware' => 'auth'], function () {
    Route::resource('productos', 'ProductController');
    Route::get('/productos/{id}/images', 'ProductImageController@index');
    // Route::post('/productos/{id}/image', 'ProductImageController@store');
    
    Route::get('/productoimage/{image_id}', function ($image_id) {
        $images = \App\Image::find($image_id);
        return Storage::download($images->src);
    });
// });

Route::get('/detalle{id}','ProductController@show');


Route::get('/tienda/{filtro1?}/{filtro2?}', 'ProductController@shop_index');

Route::get('/contacto', function () {
    return view('frontend.contact');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');