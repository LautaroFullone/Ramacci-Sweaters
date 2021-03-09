<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Image;
use Illuminate\Http\Response;
use File;

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Product::find($product_id);
        return response($product->images, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $product_id)
    {
//        if (!$request->hasFile('imagen')) {
//            return response('no se envio la imagen', 403);
//        }

        // dd($request->all());

        $validated = $request->validate([
            'img'=>'image|mimes:png,jpg'
        ]);

        foreach ($request->file('images') as $file ) {

            $path =time().'.'.$file->getClientOriginalExtension();
            $destino= public_path('images/products');

            $file->move($destino,$path);
            $imagen = new Image;
            $imagen->product_id = $product_id;

            $imagen->src = $path;

            $imagen->save();

            }
        return response('la imagen ha sido guardada ', 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imagen = Image::find($id);

        $productid = $imagen->product_id;

        $imagen->delete();

        return response("La imagen ha sido borrada.", 200);
    }
    public function getImage($file_name){
        $file = Storage::disk('images')->get($file_name);
        return new Response($file, 200);
    }
}
