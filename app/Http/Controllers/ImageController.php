<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use App\imageIg;
use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Symfony\Component\HttpKernel\HttpCache\Store;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $images = imageIg::all();

        return view('backend/instagram')->with(['images'=>$images]);
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
    public function store(Request $request)
    {

       $validated = $request->validate([
            'img'=>'required|image|mimes:png,jpg'
        ]);
        //guardo lo q trajo el formulario
        $imagen=$request->file('img');
        $imagen_path=time().'.'.$imagen->getClientOriginalExtension();
        $destino=public_path('images/instagram');
        $request->img->move($destino,$imagen_path);

        //Creo el objeto y lo guardo en bdd
        $image= new imageIg();
        $image->src=$imagen_path;
        $image->save();
        return redirect()->route('insta');

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
    public function edit(Request $request )
    {
        $id=$request->id;
        $image=imageIg::find($id);
        $imagen=$request->file('img');
        $imagen_path=time().'.'.$imagen->getClientOriginalExtension();
        $destino=public_path('images/instagram');
        $request->img->move($destino,$imagen_path);
        $image->src=$imagen_path;
        $image->save();
        return redirect()->route('insta');
    }

    public function showEdit(Request $request){
        $id=$request->id;
        return view('backend/editIg')->with(['id'=>$id]);
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
    public function destroy(Request $request)
    {
        $id=$request->id;
        $image=imageIg::find($id);
        //unlink(public_path('images/instagram/'.$image->src));
        $image->delete();
        return redirect()->route('insta');
    }

    public function showFormImg()
    {
        return view('backend/createIg');
    }
}
