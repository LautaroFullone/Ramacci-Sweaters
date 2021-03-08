<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartBdd;
use App\BddCart;

class CartController extends Controller
{

    private $cartBdd;

    public function __construct()
    {   $this->cartBdd= new CartBdd();
        $this->BddCart= new BddCart();
        $this->middleware('auth');
    }

    public function add(Request $request){
        $user_id = Auth::user()->id;
        $product = Product::find($request->input('id'));

        Cart::session($user_id)->add(array(
                    'id' =>$product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => 1,
                    'attributes' => array(),
                    'associatedModel' => $product
        ));

        $carrito = Cart::session($user_id)->getContent();
        $this->cartBdd->put($user_id,$carrito);

        return redirect()->back();
    }
    public function addNoRequest($carro)
    {   $user_id = Auth::user()->id;

        foreach ($carro as $key => $carrito)
        {
        Cart::session($user_id)->add(array(
            'id' =>$carrito->id,
            'name' => $carrito->name,
            'quantity' =>  $carrito->quantity,
            'price' => $carrito->price,
            'attributes' => array(),
            'associatedModel' => $carrito->associatedModel
        ));

        }
    }
    public function removeItem($id){
        $user_id = Auth::user()->id;
        Cart::session($user_id)->remove(array(
                    'id' => $id
        ));
            $carrito = Cart::session($user_id)->getContent();
            $this->cartBdd->put($user_id,$carrito);
            return redirect()->back();
    }

    public function clear(){
        $user_id = Auth::user()->id;
        Cart::session($user_id)->clear();
            $carrito = Cart::session($user_id)->getContent();
            $this->cartBdd->put($user_id,$carrito);
        return redirect()->back();
    }
    public function updateup($id){
        $user_id = Auth::user()->id;
        Cart::session($user_id)->update($id,array(
            'quantity'=> +1
        ));

            $carrito = Cart::session($user_id)->getContent();
            $this->cartBdd->put($user_id,$carrito);
            return redirect()->back();
    }
    public function updatedown($id){
        $user_id = Auth::user()->id;
        Cart::session($user_id)->update($id,array(
            'quantity'=> -1
        ));

            $carrito = Cart::session($user_id)->getContent();
            $this->cartBdd->put($user_id,$carrito);
            return redirect()->back();
    }
}
