<?php

namespace App\Http\Controllers;
use App\Product;
use App\Image;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Product::orderBy('created_at', 'desc')->paginate(500);
<<<<<<< Updated upstream
=======



>>>>>>> Stashed changes

        foreach ($productos as $key => $producto) {
            $foto = Image::where('product_id', $producto->id)->first();
            if($foto != null) {
                $producto->image = $foto->id;
            }
<<<<<<< Updated upstream
        }
=======

        }

        // dd($productos);



>>>>>>> Stashed changes
        return view('backend.index', ['products' => $productos]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function shop_index($filtro1 = null, $filtro2 = null)
    {
        $todoslosproductos = Product::all();

        foreach ($todoslosproductos as $producto) {

            if (isset($producto->old_price) && isset($producto->price)) {
<<<<<<< Updated upstream
                $producto->price_dif = $producto->old_price - $producto->price;
                $producto->price_saving = intval($producto->price_dif / $producto->old_price * 100);
=======

                $producto->price_dif = $producto->old_price - $producto->price;

                $producto->price_saving = intval($producto->price_dif / $producto->old_price * 100);

>>>>>>> Stashed changes
            }

            $foto = Image::where('product_id', $producto->id)->first();

            if (!empty($foto)) {
                $producto->image = $foto->id;
            }
            $producto->rating_rounded = round($producto->rating);
        }

        $productsDestacados = \App\Product::where('in_populars', 1)->take(4)->get();

        foreach ($productsDestacados as $key => $producto) {

            $foto = \App\Image::where('product_id', $producto->id)->first();
            $producto->image = $foto->id;
        }


        return view('frontend.shop-index', ['allproducts' => $todoslosproductos, 'populars' => $productsDestacados, 'filter1' => $filtro1, 'filter2' => $filtro2]);
    }

    public function create()
    {
        return view('backend.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);


        $producto = new Product;

        $producto->code = $request->code;
        $producto->name = $request->name;
        $producto->description = $request->description;
        $producto->category = $request->category;
        $producto->gender = $request->gender;
        $producto->collection_season = $request->collection_season;
        $producto->collection_year = $request->collection_year;
        $producto->stock = $request->stock;
        $producto->price = $request->price;
        $producto->old_price = $request->old_price;

        /*
        $producto->amount_sold = 0;
        $producto->rating = 0;
        $producto->amount_rates = 0;
        */

        $producto->has_size_1 = ($request->has_size_1=='on') ? true : false;
        $producto->has_size_2 = ($request->has_size_2=='on') ? true : false;
        $producto->has_size_3 = ($request->has_size_3=='on') ? true : false;
        $producto->has_size_4 = ($request->has_size_4=='on') ? true : false;
        $producto->has_size_5 = ($request->has_size_5=='on') ? true : false;

        $producto->show = ($request->show=='on') ? true : false;
        $producto->in_slide = ($request->in_slide=='on') ? true : false;
        $producto->in_novelties = ($request->in_novelties=='on') ? true : false;
        $producto->in_populars = ($request->in_populars=='on') ? true : false;
        $producto->in_discounts = ($request->in_discounts=='on') ? true : false;

        $producto->save();

        $productoid = Product::latest('id')->first();

        return redirect('/productos/'.$productoid->id.'/edit')->with('alert', 'Artículo creado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Product::where('id', $id)->first();

        // dd($producto);


        if (isset($producto->old_price) && isset($producto->price)) {

            $producto->price_dif = $producto->old_price - $producto->price;

            $producto->price_saving = intval($producto->price_dif / $producto->old_price * 100);

        }

        $producto->description_array = explode("\n", $producto->description);

        $fotos = \App\Image::where('product_id', $id)->get();


        if ($producto->in_discounts == 1) {
            $relacionados = Product::where('in_discounts', 1)->where('id', '<>', $id)->take(10)->get();
        } else {
            $relacionados = Product::where('category', $producto->category)->where('id', '<>', $id)->take(10)->get();
        }

        foreach ($relacionados as $key => $prod) {

            $foto = Image::where('product_id', $prod->id)->first();
            if (!empty($foto)) {
                $prod->image = $foto->id;
            }

            if (isset($prod->old_price) && isset($prod->price)) {

                $prod->price_dif = $prod->old_price - $prod->price;

                $prod->price_saving = intval($prod->price_dif / $prod->old_price * 100);

            }
        }

        // dd($relacionados);

        //dd(is_array($relacionados));


        return view('frontend.detail', ['product' => $producto, 'images' => $fotos, 'related' => $relacionados]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Product::find($id);

        $fotos = Image::where('product_id', $id)->take(3)->get();

        // dd($fotos[0]->id);





        if ($fotos != null) {
            return view('backend.detail', ['product' => $producto, 'images' => $fotos]);
        } else {
            return view('backend.detail', ['product' => $producto]);
        }



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);

        $producto = Product::find($id);

        $producto->code = $request->code;
        $producto->name = $request->name;
        $producto->description = $request->description;
        $producto->category = $request->category;
        $producto->gender = $request->gender;
        $producto->collection_season = $request->collection_season;
        $producto->collection_year = $request->collection_year;
        $producto->stock = $request->stock;
        $producto->price = $request->price;
        $producto->old_price = $request->old_price;

        $producto->has_size_1 = ($request->has_size_1=='on') ? true : false;
        $producto->has_size_2 = ($request->has_size_2=='on') ? true : false;
        $producto->has_size_3 = ($request->has_size_3=='on') ? true : false;
        $producto->has_size_4 = ($request->has_size_4=='on') ? true : false;
        $producto->has_size_5 = ($request->has_size_5=='on') ? true : false;

        $producto->show = ($request->show=='on') ? true : false;
        $producto->in_slide = ($request->in_slide=='on') ? true : false;
        $producto->in_novelties = ($request->in_novelties=='on') ? true : false;
        $producto->in_populars = ($request->in_populars=='on') ? true : false;
        $producto->in_discounts = ($request->in_discounts=='on') ? true : false;

        $producto->save();


        return redirect('/productos/'.$producto->id.'/edit')->with('alert', 'Cambios guardados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Product::find($id);

        $fotos = Image::where('product_id', $id);

        $fotos->delete();

        $producto->delete();

        return redirect('/productos');
    }
}
