<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Productos;
use Illuminate\Http\Request;

class ListaComprasController extends Controller
{
    public function index(Request $request){
        $productos=Productos::all();
        $categorias=Categorias::all();
        return view('shop.productos',compact(['productos','categorias']));
    }
    public function test(Request $request){

        $producto = Productos::where('id','=','1')->first();
        $producto2 = Productos::where('id','=','2')->first();
        $cart=\Cart::add($producto, 10);
        //return $cart->rowId;
        //$cart=\Cart::add($producto2, 1);
        //$cart=\Cart::remove($cart->rowId);
        $cart=\Cart::content();
        //$cart = \Cart::destroy();
        //dd($request->session());
        return $cart;
        
    }
}
