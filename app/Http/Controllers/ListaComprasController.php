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
    public function detalleproducto($id){
        $producto=Productos::where('id','=',$id)->first();
        return view('shop.detalleprod',compact(['producto']));
    }
    public function agregarproducto(){
        //Logica añadir producto al carrito
        return view('shop.agregado');
    }
    public function review()
    {
        //Obtener carrito de compras
        return view('shop.review');
    }
    public function vaciarcarrito(){
        
    }
    public function procesarpedido(){
        return view('shop.procesarpedido');
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
