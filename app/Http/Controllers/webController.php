<?php

namespace App\Http\Controllers;

use App\Image;
use App\imageIg;
use App\Product;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class webController extends Controller
{
    public function index()
    {
        $user=Auth::user();
        $cartBdd= new CartBdd();
        $cartController= new CartController();
        //dd($user);
        $productsSlider1Dama = Product::where('in_novelties', 1)->where('gender', 'dama')->take(8)->get();
        $productsSlider1Hombre = Product::where('in_novelties', 1)->where('gender', 'caballero')->take(8)->get();
        $productsSlider1Rebaja = Product::where('in_discounts', 1)->take(8)->get();
        $imageIg=imageIg::all();
        //dd($imageIg)
        foreach ($productsSlider1Dama as $key => $producto) {


            $foto = Image::where('product_id', $producto->id)->first();
            if (!empty($foto)) {
                $producto->image = $foto->id;
            }
        }

        foreach ($productsSlider1Hombre as $key => $producto) {

            $foto = Image::where('product_id', $producto->id)->first();
            if (!empty($foto)) {
                $producto->image = $foto->id;
            }
        }

        foreach ($productsSlider1Rebaja as $key => $producto) {

            $foto = Image::where('product_id', $producto->id)->first();
            if (!empty($foto)) {
                $producto->image = $foto->id;
            }
        }

        $productsDestacados = Product::where('in_populars', 1)->take(6)->get();

        foreach ($productsDestacados as $key => $producto) {

            $foto = Image::where('product_id', $producto->id)->first();
            if (!empty($foto)) {
            $producto->image = $foto->id;
            }
        }

        // dd($productsSlider1Dama);
        if($user != null){

        $user_carro=$cartBdd->get($user->id);
        $subtotal = Cart::session($user->id)->getSubTotal();

        if(!empty($user_carro) && $subtotal == 0.0)
        {
            $cartController->addNoRequest($user_carro);
        }
        $cartTotalQuantity = Cart::session($user->id)->getTotalQuantity();
        $carro=Cart::session($user->id)->getContent();
        //dd($cartTotalQuantity);
        //dd($carro);
        //dd($carro[1]->associatedModel->id);
        if($cartTotalQuantity !=0)
        {$images=array();
            foreach($carro as $carrito)
            echo $carrito->associatedModel->id;
            $imagen=Image::get()->where('product_id',$carrito->associatedModel->id);
            var_dump($carrito);
            echo' holaaa';
            array_push($images,$imagen);
        }
        $total=Cart::session($user->id)->getTotal();

        die();
        //dd($carro[1]->associatedModel);

                if(isset($images) && isset($carro) ){

                return view('frontend.index',[
                    'user'=> $user,
                    'productsSlider1Dama' => $productsSlider1Dama,
                    'productsSlider1Hombre' => $productsSlider1Hombre,
                    'productsSlider1Rebaja' => $productsSlider1Rebaja,
                    'productsDestacados' => $productsDestacados,
                    'imageIg'=> $imageIg,
                    'subTotal'=>$subtotal,
                    'quantity'=>$cartTotalQuantity,
                    'carro'=>$carro,
                    'images'=>$images,
                    'total'=>$total
                    ]);
                }
                else{

                    return view('frontend.index',[
                        'user'=> $user,
                        'productsSlider1Dama' => $productsSlider1Dama,
                        'productsSlider1Hombre' => $productsSlider1Hombre,
                        'productsSlider1Rebaja' => $productsSlider1Rebaja,
                        'productsDestacados' => $productsDestacados,
                        'imageIg'=> $imageIg,
                        'quantity'=>$cartTotalQuantity,
                        ]);
                }
        }
        else{

            return view('frontend.index',[
            'user'=> $user,
            'productsSlider1Dama' => $productsSlider1Dama,
            'productsSlider1Hombre' => $productsSlider1Hombre,
            'productsSlider1Rebaja' => $productsSlider1Rebaja,
            'productsDestacados' => $productsDestacados,
            'imageIg'=> $imageIg,
            ]);

        }
    }
}
